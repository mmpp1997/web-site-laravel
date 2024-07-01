@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
@endsection
@section('content')
    @include('partials.header')
    <h2 class="title">Lorem Ipsum</h2>
    <p class="text">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
        to make a
        type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
        Lorem Ipsum.
    </p>
    @include('partials.footer')
@endsection
