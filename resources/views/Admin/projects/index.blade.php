@extends('admin.layouts.base')

@section('contents')
    <div class="container">
        <div class="row row-cols-3">
            @foreach ($projects as $project)
                <div class="col">
                    <div class="card-body">
                        <h1 class="card-title">{{ $project->title }}</h1>
                        <p class="card-text">{{ $project->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $project->date }}</li>
                        <li class="list-group-item">{{ $project->name }}</li>
                        <li class="list-group-item">{{ $project->surname }}</li>
                    </ul>
                    <div class="card-body">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $projects->links() }}
@endsection
