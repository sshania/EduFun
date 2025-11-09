@extends('layout.master')
@section('title', 'Category')

@section('content')

<div class="container mt-4">
    <h1 class="mb-4">Categories</h1>

    <div class="row">
        @foreach ($categories as $c)
            <div class="col-md-6 mb-3">
                <a href="{{ route('categories.show', $c->id) }}" class="text-decoration-none text-dark">
                    <div class="card shadow-sm p-2 d-flex flex-row align-items-center">
                        <div class="me-3">
                            <img src="{{ asset('images/' . $c->id . '.jpg') }}" 
                                 alt="{{ $c->name }}" 
                                 style="width:80px; height:80px; object-fit:cover;">
                        </div>
                        <div>
                            <h4>{{ $c->name }}</h4>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>


@endsection