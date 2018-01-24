@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Create a Post</h1>
        <form method="POST" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Email address</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter email" >
            </div>
            <div class="form-group">
                <label for="body">Example textarea</label>
                <textarea class="form-control" id="body" name="body" rows="3" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @include('layouts.errors')
    </div>
@endsection