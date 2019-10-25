@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-primary">Go back </a>
    <h1>{{$post->title}}</h1>
    <img style="width:30%" src="/storage/cover_images/{{$post->cover_image}}">
    <br/><br/>
    <div>
        
                {!! $post->body !!}
    </div>
    <hr/>
<small>Created at::{{$post->created_at}} By {{$post->user->name}}</small>
    <hr/>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>  
                {!! Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'POST','class'=>'float-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('delete',['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
        @endif        
    @endif
<br/><br/>
@endsection