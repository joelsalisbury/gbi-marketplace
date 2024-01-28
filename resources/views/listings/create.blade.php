@extends('layouts.app')

@section('title', 'Create Listing')

@section('content')
    <div class="container mt-4">
        <h1>Create Listing</h1>

        <form method="post" action="{{ route('listings.store') }}">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <!-- listing type (auction or classified) -->
            <div class="mb-3">
                <label for="listing_type" class="form-label">Listing Type</label>
                <select class="form-select" id="listing_type" name="listing_type" required>
                    <option value="" disabled selected>Select Listing Type</option>
                    <option value="auction">Auction</option>
                    <option value="classified">Classified</option>
                </select>
            </div>

            <!-- auction specific fields -->
            <div class="mb-3" id="start_date" style="display: none;">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date">
            </div>

            <div class="mb-3" id="end_date" style="display: none;">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" class="form-control" id="end_date" name="end_date">
            </div>

            <!-- rserve price -->
            <div class="mb-3" id="reserve_price" style="display: none;">
                <label for="reserve_price" class="form-label">Reserve Price</label>
                <input type="number" class="form-control" id="reserve_price" name="reserve_price">
            </div>

            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="number" class="form-control" id="year" name="year" required>
            </div>

            <div class="mb-3">
                <label for="make_id" class="form-label">Make</label>
                <select class="form-select" id="make_id" name="make_id" required>
                    <option value="" disabled selected>Select Make</option>
                    @foreach($makes as $make)
                        <option value="{{ $make->id }}">{{ $make->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="model_id" class="form-label">Model</label>
                <select class="form-select" id="model_id" name="model_id" required>
                    <option value="" disabled selected>Select Model</option>
                    <!-- Models will be populated based on the selected make using JavaScript or by fetching from the server -->
                </select>
            </div>

            <!-- Add more form fields for other listing attributes -->

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>

            

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Create Listing</button>
            </div>
        </form>
    </div>

    <script>
        // if it is an auction, show the start date and end date, and reserve price
        var listingType = document.getElementById('listing_type');
        var startDate = document.getElementById('start_date');
        var endDate = document.getElementById('end_date');
        var reservePrice = document.getElementById('reserve_price');

        listingType.addEventListener('change', function () {
            if (listingType.value === 'auction') {
                startDate.style.display = 'block';
                endDate.style.display = 'block';
                reservePrice.style.display = 'block';
            } else {
                startDate.style.display = 'none';
                endDate.style.display = 'none';
                reservePrice.style.display = 'none';
            }
        });

    </script>
@endsection