<div>
    @if($browseMode)
    <div class="card card-outline">
        <div class="card-header">
            <h3 class="card-title text-bold">Position</h3>
            <div class="float-right">
                <button wire:click="create()" class="btn btn-sm btn-primary">
                    <i class="fas fa-plus-circle"></i> Create
                </button>
                
                <button wire:click="import()" class="btn btn-sm btn-primary">
                    <i class="fas fa-upload"></i> Import
                </button>                  
            </div>
        </div>
        <div class="card-body">
            @livewire('hrsettings::position-table')
        </div>
    </div>
       
    @elseif ($createMode||$editMode)
        @include('hrsettings::livewire.position.create')  

    @elseif($importMode)
        @include('hrsettings::livewire.position.import')
    @endif
</div>