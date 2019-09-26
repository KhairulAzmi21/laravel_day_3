@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Posts
                    <div class="float-right">
                        <a href="/post/create" class="btn btn-primary">New Post</a>
                    </div>
                </div>

                <div class="card-body">
                    post from {{ auth()->user()->name }} , has roles {{ auth()->user()->roles->implode('name', ' |') }}
                    <br>
                    This user has a {{ $posts->count() }} posts.
                    <table class="table">
                        <tr>
                            {{--  --}}
                            <th>Title</th>
                            <th>Created At</th>
                            <td>Action</td>
                        </tr>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->created_at->toFormattedDateString() }}</td>
                            <td>
                                <a class="btn btn-primary" href="/post/{{ $post->id}}">Show</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
