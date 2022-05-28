<?php

namespace Luanardev\Modules\HRSettings\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Luanardev\Modules\HRSettings\Entities\JobStatus;


class JobStatusTable extends DataTableComponent
{

    public array $perPageAccepted = [10, 20, 50, 100, 200, 500];
    
    public function editAction()
	{
		if(count($this->selectedKeys)){
			$key = collect($this->selectedKeys)->first();
			return $this->emit('edit-job-status', $key);
		}
	}

	public function deleteAction()
	{
		if(count($this->selectedKeys)){
			return $this->emit('delete-job-status', $this->selectedKeys) ;
		}
	}

	public function getListeners()
    {
        return [
            'refresh' => '$refresh',
        ];
    }

	public function bulkActions(): array
	{
		return [
            'editAction'    =>  'Edit',
			'deleteAction'	=>	'Delete',
		];
	}

	public function columns(): array
	{
		return [
			Column::make('Name'),
		];
	}

	public function query()
	{
		return JobStatus::query()
			->when($this->getFilter('search'),
				fn ($query, $term) => $query->search($term)
        );
	}


}
