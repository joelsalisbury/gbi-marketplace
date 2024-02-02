<!-- index for models -->
@extends('layouts.app')

@section('title', 'Models')

@section('content')
    <div class="container mt-4">
        <h1>Models</h1>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <a href="{{ route('models.create') }}" class="btn btn-primary">Create Model</a>
            </div>
            <form action="{{ route('models.index') }}" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Make</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($models as $model)
                    <tr>
                        <td>{{ $model->name }}</td>
                        <td>{{ $model->make->name }}</td>
                        <td>
                            <a href="{{ route('models.edit', $model) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('models.destroy', $model) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No models found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        
    </div>
@endsection