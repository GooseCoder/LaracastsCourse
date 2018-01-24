@extends('layouts.master')


@section('content')
    <div class="col-sm-8 blog-main">
        <h1>{{$post->title}}</h1>
            {{$post->body}}
        <hr/>
        <div class="comments">
            <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{$comment->created_at->diffForHumans()}}:
                    </strong>
                    {{ $comment->body }}
                </li>
            @endforeach
            </ul>
        </div>
        <hr/>

        <div class="card">
            <div class="card-block">
                <form action="/posts/{{$post->id}}/comments" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" id="body" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </div>
                </form>
            </div>
        </div>
        @include('layouts.errors')
    </div>

@endsection