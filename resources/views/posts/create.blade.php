@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        
                    @endif
                    <form action="/post" method="post">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" value=""> <br>
                        <label for="">Body</label>
                        <textarea name="body" class="form-control" rows="8" cols="80"></textarea><br>
                        <button type="submit" class="btn btn-primary" name="button">Add New Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
