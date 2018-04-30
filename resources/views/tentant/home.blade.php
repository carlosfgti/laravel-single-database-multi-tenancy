@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ config('app.name') }} Dashboard</div>

                <div class="panel-body">
                    <div class="list-group">
                        @foreach ($projects as $project)
                            <a href="{{ route('projects.show', $project) }}" class="list-group-item">{{ $project->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">New project</div>

                <div class="panel-body">
                    @include('tenant.projects.partials._create')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
