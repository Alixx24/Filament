@extends('customer.layouts.master-contnets')

@section('title', $post->meta_title ?? $post->title)

@section('meta')
    <meta name="robots" content="index, follow">

    <meta name="description" content="{{ $post->meta_description ?? $post->summary }}">
    <meta name="keywords" content="{{ $post->meta_keywords }}">
    <meta name="author" content="GrowVixo">
    <meta name="publisher" content="GrowVixo">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="article">

    @if ($post->canonical_url)
        <link rel="canonical" href="{{ $post->canonical_url }}">
    @endif
    @if ($post->thumbnail)
        <meta property="og:image" content="{{ asset('storage/' . $post->thumbnail) }}">
    @endif
    <meta property="og:title" content="{{ $post->meta_title ?? $post->title }}">
    <meta property="og:description" content="{{ $post->meta_description ?? $post->summary }}">
@endsection


@section('content')
    <section class="p-2 m-3 bg-light p-mt-head border border-primary rounded-3">

        <h1 class="m-3">{{ $post->title }}</h1>
        <hr>

        <div class="p-show m-3">
            {!! \Illuminate\Support\Str::markdown($post->content) !!}
        </div>
        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->alt_text }}" class="w-img">

        <div class="p-show mt-4">
            <strong>ամփոփում:</strong> {{ $post->summary }}
        </div>

        @php
            $tags = is_array($post->tags) ? $post->tags : explode(',', $post->tags ?? '');
        @endphp

        @if ($tags && count($tags) > 0)
            <div class="mt-3">
                <strong>թեգեր:</strong>
                @foreach ($tags as $tag)
                    <a href="#" class="badge bg-secondary">{{ trim($tag) }}</a>
                @endforeach
            </div>
        @endif

    </section>
    <script src="../js/header.js"></script>
@endsection
