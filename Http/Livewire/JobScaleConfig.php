<?php

namespace Luanardev\Modules\HRSettings\Http\Livewire;
use Luanardev\LivewireUI\LivewireUI;
use Luanardev\Modules\HRSettings\Entities\JobScale;

class JobScaleConfig extends LivewireUI
{
    public JobScale $scale;

    public function __construct()
    {
        $this->scale = new JobScale();
    }

    public function render()
    {
        return view('hrsettings::livewire.job-scale.index');
    }

    public function create()
    {
        $this->createMode();
    }

    public function edit($id=null)
    {
        $this->scale = JobScale::findorfail($id);
        $this->editMode();
    }

    public function show()
    {
        $this->browseMode();
    }

    public function delete($keys)
    {
        JobScale::destroy($keys);
        $this->browseMode()->emitRefresh()->toastr('Scale deleted');
    }

    public function save()
    {
        $this->validate();
        $this->scale->save();
        $this->browseMode()->emitRefresh()->toastr('Scale saved');
    }

    public function rules()
    {
        return[
            'scale.scale' => 'required|string',
            'scale.leave_days' => 'nullable|int',
        ];

    }

    public function getListeners()
    {
        return [
            'create-scale'  => 'create',
            'edit-scale'    => 'edit',
            'delete-scale'  => 'delete',
        ];
    }

  
}
