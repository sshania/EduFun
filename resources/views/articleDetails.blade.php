@extends('layout.master')
@section('title', 'Details')

@section('content')

<div class="row mt-4">
    
    <h2 class="text-center mb-4">{{ $article->title }}</h2>

    @if($article->image)
            <div class="text-center mb-4">
                <img src="{{ asset($article->image) }}" 
                    alt="{{ $article->title }}" 
                    class="img-fluid rounded" 
                    style="max-height: 400px; object-fit: cover; object-position: center;">
            </div>
    @endif

    <p class="text-start text-muted mb-4">
            {{ \Carbon\Carbon::parse($article->created_at)->format('d M Y') }} | 
            By: {{ $article->writer->name ?? 'Unknown' }}
        </p>

        <div class="article-body text-start">
            {!! nl2br(e($article->details)) !!}
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('home') }}" class="btn btn-secondary">Back to Articles</a>
        </div>

    @endsection
</div>