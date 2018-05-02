@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Project {{ $project->name }}</div>

                <div class="panel-body">
                    <form action="{{ route('projects.update', $project) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="form-group">
                            <label for="name">Project name</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $project->name) }}" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
