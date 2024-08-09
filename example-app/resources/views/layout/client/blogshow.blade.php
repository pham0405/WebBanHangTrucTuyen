@extends('layout.master')

@section('contents')
@title('{{ $post->title }}')

<div class="container mt-5">
    <h1>{{ $post->title }}</h1>
    <img src="{{ $post->image }}" class="img-fluid" alt="{{ $post->title }}">
    <div class="mt-3">
        <p>{{ $post->content }}</p>
    </div>
</div>
@endsection
