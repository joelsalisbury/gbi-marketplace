@extends('layouts.app')

@section('title', 'Single Listing')

@section('content')

{{-- $table->string('title');
$table->integer('year');
$table->foreignId('make_id')->constrained('makes');
$table->foreignId('model_id')->constrained('vehicle_models');
$table->string('type');
$table->boolean('auction');
$table->boolean('classified');
$table->decimal('price', 10, 2);
$table->decimal('reserve', 10, 2);
$table->foreignId('current_high_bidder')->nullable()->constrained('users');
$table->foreignId('seller')->constrained('users');
$table->text('description');
$table->string('transmission');
$table->string('color');
$table->string('trim');
$table->integer('mileage'); --}}

<!-- listing details based on the above fields -->

<h1>{{ $listing->title }}</h1>
<p>{{ $listing->year }} {{ $listing->make->name }} {{ $listing->model->name }}</p>
<p>{{ $listing->type }}</p>
<p>{{ $listing->price }}</p>
<p>{{ $listing->description }}</p>
<p>{{ $listing->transmission }}</p>
<p>{{ $listing->color }}</p>
<p>{{ $listing->trim }}</p>
<p>{{ $listing->mileage }}</p>

@endsection

