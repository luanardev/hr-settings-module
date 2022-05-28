@extends('hrsettings::layouts.app')

@section('content')

<div class="container-fluid">

	<div class="content-header">

		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="m-0">Job Scale</h4>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ url('hrsettings') }}">Home</a></li>
					<li class="breadcrumb-item active">scales</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="content">       
        <livewire:hrsettings::job-scale-config />						
	</div>
</div>


@endsection

