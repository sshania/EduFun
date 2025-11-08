@extends('layout.master')
@section('title', 'Popular')

@section('content')

<div class="row align-items-start border-0 bg-transparent p-2">
    <div class="col-md-4 text-start">
        <img src="{{ asset($writer->imagePath) }}" 
             alt="{{ $writer->name }}" 
             class="rounded-circle" 
             style="width: 80px; height: 80px; object-fit: cover;">
    </div>
    <div class="col-md-8 mt-4 text-start">
        <h6 class="fw-semibold mb-1">{{ $writer->name }}</h6>
        <p class="text-muted mb-0" style="font-size: 0.85rem;">{{ $writer->title }}</p>
    </div>
</div>


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
@endsection