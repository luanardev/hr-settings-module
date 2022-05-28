<?php

namespace Luanardev\Modules\HRSettings\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Luanardev\Modules\HRSettings\Entities\JobScale;


class JobScaleTable extends DataTableComponent
{

    public array $perPageAccepted = [10, 20, 50];
    

    public function editAction()
	{
		if(count($this->selectedKeys)){
			$key = collect($this->selectedKeys)->first();
			return $this->emit('edit-scale', $key);
		}
	}

	public function deleteAction()
	{
		if(count($this->selectedKeys)){
			return $this->emit('delete-scale', $this->selectedKeys) ;
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
			Column::make('Scale'),
			Column::make('Leave Days'),
		];
	}

	public function query()
	{
		return JobScale::query()
			->when($this->getFilter('search'),
				fn ($query, $term) => $query->search($term)
        );
        
	}


}
