@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $post->title}}
                        <span class="float-right">Owner : {{ $post->user->name }}</span>
                    </div>

                    <div class="card-body">
                        <p>{{ $post->body }}</p>
                        <small> publish at {{ $post->created_at }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
