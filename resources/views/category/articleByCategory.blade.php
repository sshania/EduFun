@extends('layout.master')
@section('title', 'Articles By Category')

@section('content')

<div class="container mt-4">
    <h1 class="mb-4">{{ $articles->first()->category->name ?? '' }}</h1>

    <div class="row">
        @foreach ($articles as $article)
        <div class="row mb-4 align-items-center p-3 bg-transparent rounded">
            <div class="col-md-4">
                @if($article->image)
                    <img src="{{ asset($article->image) }}" class="img-fluid rounded" 
                    style="width: 400px; height: 200px; object-fit: cover; object-position: center;"
                     alt="{{ $article->title }}">
                @endif
            </div>

            <div class="col-md-8">
                <h4>{{ $article->title }}</h4>
                <p class="text-muted">
                    {{ \Carbon\Carbon::parse($article->created_at)->format('d M Y') }} |
                    By: {{ $article->writer->name ?? 'Unknown' }}
                </p>
                <p>{{ Str::limit($article->details, 200) }}</p>
                <a href="{{ route('article.details', $article->id) }}" class="btn btn-primary btn-sm">Read More</a>
            </div>

        </div>
    @endforeach
    </div>
</div>

@endsection