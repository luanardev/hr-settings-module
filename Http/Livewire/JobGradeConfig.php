<?php

namespace Luanardev\Modules\HRSettings\Http\Livewire;
use Luanardev\LivewireUI\LivewireUI;
use Luanardev\Modules\HRSettings\Entities\JobGrade;

class JobGradeConfig extends LivewireUI
{
    public JobGrade $grade;

    public function __construct()
    {
        $this->grade = new JobGrade();
    }

    public function render()
    {
        return view('hrsettings::livewire.job-grade.index');
    }

    public function create()
    {
        $this->createMode();
    }

    public function edit($id=null)
    {
        $this->grade = JobGrade::findorfail($id);
        $this->editMode();
    }

    public function show()
    {
        $this->browseMode();
    }

    public function delete($keys)
    {
        JobGrade::destroy($keys);
        $this->browseMode()->emitRefresh()->toastr('Grade deleted');
    }

    public function save()
    {
        $this->validate();
        $this->grade->save();
        $this->browseMode()->emitRefresh()->toastr('Grade saved');
    }

    public function rules()
    {
        return[
            'grade.name' => 'required|string',
        ];

    }

    public function getListeners()
    {
        return [
            'create-grade'  => 'create',
            'edit-grade'    => 'edit',
            'delete-grade'  => 'delete',
        ];
    }

  
}
