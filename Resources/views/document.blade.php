@extends('hrsettings::layouts.app')

@section('content')

<div class="container-fluid">

	<div class="content-header">

		<div class="row mb-2">
			<div class="col-sm-6">
				<h4 class="m-0">Documents</h4>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="{{ url('hrsettings') }}">Home</a></li>
					<li class="breadcrumb-item active">documents</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="content">       
        <livewire:hrsettings::document-type-config />						
	</div>
</div>


@endsection

