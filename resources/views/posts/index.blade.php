@extends('layouts.app')

@section('content')
   <h1>Posts from index</h1>
   @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="with:100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Posted on: {{$post->created_at}} by {{$post->user->name}}</small>
                        <p>{!!$post->body!!}</p>
                    </div> 
                </div>    
                
            </div>    
        @endforeach
       <br>
       {{$posts->links()}}
    @else
      <p>No post found</p>
   @endif    
@endsection