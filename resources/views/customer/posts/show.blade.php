@extends('customer.layouts.master-contnets')

@section('title', $post->meta_title ?? $post->title)

@section('meta')
    <meta name="description" content="{{ $post->meta_description ?? $post->summary }}">
    <meta name="keywords" content="{{ $post->meta_keywords }}">
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
    <section class="p-2 m-3 bg-light p-mt-head">

        <h1>{{ $post->title }}</h1>
        <hr>

        <div class="p-show">
            {!! \Illuminate\Support\Str::markdown($post->content) !!}
        </div>

        @if ($post->summary)
            <div class="p-show mt-4">
                <strong>ամփոփում:</strong> {{ $post->summary }}
            </div>
        @endif

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
