@extends('layout.master')
@section('title', 'Writers')

@section('content')

<div class="row">
    <h1 class="text-center mb-5 fw-bold">Meet Our Writers</h1>

    <div class="row justify-content-center ">
        @foreach ($writers as $writer)
            <div class="col-md-4 mb-4">
                <div class="card border-0 text-center h-100 bg-transparent">
                    <div class="card-body">
                        <a href="{{ route('article.byWriter', $writer->id) }}">
                            <img src="{{ asset($writer->imagePath) }}" 
                                alt="{{ $writer->name }}" 
                                class="rounded-circle mb-3" 
                                style="width: 150px; height: 150px; object-fit: cover;">
                        </a>
                        <h5 class="card-title fw-semibold">{{ $writer->name }}</h5>
                        <p class="card-text text-muted">{{ $writer->title }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection