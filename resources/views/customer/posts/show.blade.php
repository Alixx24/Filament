@extends('customer.layouts.master-contnets')
@section('title', 'AlixDev')

@section('content')
    <style>
        .p-mt-head {
            margin-top: 135px !important;
            margin-bottom: 25px;
        }
    </style>
    <section class="p-2 m-3 bg-light p-mt-head">
        <div class="p-show">
            {{ $post->title }}
        </div>
        <hr>
        <div class="p-show">
            {{ $post->content }}
        </div>
        <div class="p-show mt-4">
            {{ $post->summary }}
        </div>

    </section>

    @vite(['resources/views/customer/layouts/js/header.ts', 'resources/css/app.css'])


@endsection
