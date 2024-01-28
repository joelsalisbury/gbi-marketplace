@extends('layouts.app')

@section('title', 'Listings')

@section('content')

<h1> Listings </h1>

<div class="row">
    <div class="col-12">
        <a href="{{ route('listings.create') }}" class="btn btn-primary">Create Listing</a>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listings as $listing)
                <tr>
                    <td>{{ $listing->title }}</td>
                    <td>{{ $listing->price }}</td>
                    <td>{{ $listing->created_at }}</td>
                    <td>
                        <a href="{{ route('listings.show', $listing) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('listings.edit', $listing) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('listings.destroy', $listing) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                        <a href="{{ route('listings.buy', $listing) }}" class="btn btn-success">Buy</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
