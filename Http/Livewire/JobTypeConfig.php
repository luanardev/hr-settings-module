<?php

namespace Luanardev\Modules\HRSettings\Http\Livewire;
use Luanardev\LivewireUI\LivewireUI;
use Luanardev\Modules\HRSettings\Entities\JobType;

class JobTypeConfig extends LivewireUI
{
    public JobType $jobtype;

    public function __construct()
    {
        $this->jobtype = new JobType();
    }

    public function render()
    {
        return view('hrsettings::livewire.job-type.index');
    }

    public function create()
    {
        $this->createMode();
    }

    public function edit($id=null)
    {
        $this->jobtype = JobType::findorfail($id);
        $this->editMode();
    }

    public function show()
    {
        $this->browseMode();
    }

    public function delete($keys)
    {
        JobType::destroy($keys);
        $this->browseMode()->emitRefresh()->toastr('Job Type deleted');
    }

    public function save()
    {
        $this->validate();
        $this->jobtype->save();
        $this->browseMode()->emitRefresh()->toastr('Job Type saved');
    }

    public function rules()
    {
        return[
            'jobtype.name' => 'required|string',
        ];

    }

    public function getListeners()
    {
        return [
            'create-job-type'  => 'create',
            'edit-job-type'    => 'edit',
            'delete-job-type'  => 'delete',
        ];
    }

  
}
