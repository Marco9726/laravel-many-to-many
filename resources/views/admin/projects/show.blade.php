@extends('layouts.admin')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-10 my-5">
			<h2>Dettagli progetto {{ $project->title }}</h2>
		</div>
		<div class="col-2 my-5">
			<a href="{{ route('admin.projects.index')}}" class="btn btn-small btn-warning">Ritorna ai progetti</a>
		</div>
		<div class="col-12">
			<p><strong>Slug: </strong>{{ $project->slug }}</p>
			<p><strong>Linguaggio: </strong>{{ $project->type ? $project->type->name : 'Non specificato' }}</p>
			<p><strong>Descrizione: </strong>{{ $project->description }}</p>
		</div>
	</div>
</div>


@endsection