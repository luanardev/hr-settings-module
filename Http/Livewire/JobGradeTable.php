<?php

namespace Luanardev\Modules\HRSettings\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Luanardev\Modules\HRSettings\Entities\JobGrade;


class JobGradeTable extends DataTableComponent
{

    public array $perPageAccepted = [10, 20, 50];
    
    public function editAction()
	{
		if(count($this->selectedKeys)){
			$key = collect($this->selectedKeys)->first();
			return $this->emit('edit-grade', $key);
		}
	}

	public function deleteAction()
	{
		if(count($this->selectedKeys)){
			return $this->emit('delete-grade', $this->selectedKeys) ;
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
		return JobGrade::query()
			->when($this->getFilter('search'),
				fn ($query, $term) => $query->search($term)
        );
        
	}


}
