<?php

namespace Luanardev\Modules\HRSettings\Http\Livewire;
use Luanardev\LivewireUI\LivewireUI;
use Luanardev\Modules\HRSettings\Entities\JobStatus;

class JobStatusConfig extends LivewireUI
{
    public JobStatus $jobstatus;

    public function __construct()
    {
        $this->jobstatus = new JobStatus();
    }

    public function render()
    {
        return view('hrsettings::livewire.job-status.index');
    }

    public function create()
    {
        $this->createMode();
    }

    public function edit($id=null)
    {
        $this->jobstatus = JobStatus::findorfail($id);
        $this->editMode();
    }

    public function show()
    {
        $this->browseMode();
    }

    public function delete($keys)
    {
        JobStatus::destroy($keys);
        $this->browseMode()->emitRefresh()->toastr('Job Status deleted');
    }

    public function save()
    {
        $this->validate();
        $this->jobstatus->save();
        $this->browseMode()->emitRefresh()->toastr('Job Status saved');
    }

    public function rules()
    {
        return[
            'jobstatus.name' => 'required|string',
        ];

    }

    public function getListeners()
    {
        return [
            'create-job-status'  => 'create',
            'edit-job-status'    => 'edit',
            'delete-job-status'  => 'delete',
        ];
    }

  
}
