@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        @foreach($posts as $post)
        <div class="col-md-3 mb-4">
            <div class="card" style="width: 18rem;">
              <img src="http://lorempixel.com/400/400/" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $post->title }} author by {{ $post->user->name }}</h5>
                <p class="card-text">{{ $post->body}}</p>
                <a href="/post/{{ $post->id }}" class="btn btn-primary">Show More</a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-12">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
