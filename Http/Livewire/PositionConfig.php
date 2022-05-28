<?php

namespace Luanardev\Modules\HRSettings\Http\Livewire;
use Luanardev\LivewireUI\LivewireUI;
use Luanardev\Modules\HRSettings\Entities\Position;
use Luanardev\Modules\HRSettings\Imports\PositionImport;
use Maatwebsite\Excel\Validators\ValidationException;
use Livewire\WithFileUploads;
use Exception;

class PositionConfig extends LivewireUI
{
    use WithFileUploads;

    public Position $position;

    public $importMode;

    public $importFile;

   
    public function __construct()
    {
        $this->position = new Position();
    }

    public function render()
    {
        return view('hrsettings::livewire.position.index');
    }

    public function create()
    {
        $this->createMode();
    }

    public function import()
    {
        $this->importMode = true;
        $this->browseMode = false;
    }

    public function edit($id=null)
    {
        $this->position = Position::findorfail($id);
        $this->editMode();
    }

    public function show()
    {
        $this->browseMode();
        $this->importMode = false;
    }

    public function delete($keys)
    {
        Position::destroy($keys);
        $this->browseMode()->emitRefresh()->toastr('Position deleted');
    }

    public function save()
    {
        $this->validate();
        $this->position->save();
        $this->browseMode()->emitRefresh()->toastr('Position saved');
    }

    public function upload()
    {
        $this->validate([
            'importFile' => 'required|mimes:xlsx|max:102400',
        ]);

        try{
            (new PositionImport)->import($this->importFile);
            $this->importMode = false;
            return $this->browseMode()->emitRefresh()->toastr("Import successful");

        }catch(ValidationException | Exception $exception){
            if($exception instanceof ValidationException){
                return $this->toastrError( $exception->getMessage());
            }elseif($exception instanceof Exception){
                return $this->toastrError( $exception->getMessage());
            }

        }
    }


    public function rules()
    {
        return[
            'position.name' => 'required|string',
        ];

    }

    public function getListeners()
    {
        return [
            'create-position'  => 'create',
            'edit-position'    => 'edit',
            'delete-position'  => 'delete',
        ];
    }

  
}
