@extends('layout.master')
@section('contents')
@title('Bài viết')
<div>
    <section id="latest-blog" class="my-5">
        <div class="container py-5 my-5">
            <div class="row mt-5">
                <div class="section-header d-md-flex justify-content-between align-items-center mb-3">
                    <h2 class="display-3 fw-normal">Latest Blog Post</h2>
                    <div>
                        <a href="#" class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1">
                            Read all
                            <svg width="24" height="24" viewBox="0 0 24 24" class="mb-1">
                                <use xlink:href="#arrow-right"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blog as $post)
                <div class="col-lg-3 ">
                    <div class="card">
                        <a href="single-post.html">
                            <img src="{{ $post->image }}" class="card-img-top" alt="{{$post->name}}">
                        </a>
                        <div class="card-body">
                            <a href="single-post.html">
                                <h3 class="card-title">{{ $post->title }}</h3>
                            </a>
                            <p class="card-text">{{ $post->content }}</p>
                            <a href="single-post.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
