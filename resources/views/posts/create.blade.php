@extends('layouts.app')
@section('content')
    <h1>Create</h1>
    {!! Form::open(['action'=>'PostController@store','method' =>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class' => 'form-control','placeholder' => 'Type your title here'])}}
    </div>
    <div class="form group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class' => 'form-control','id'=>'summary-ckeditor','placeholder'=>'Type your body here'])}}
    </div> 
    <div class="form-group">
    {{Form::file('cover_image')}}
    
    </div>
    {{Form::submit('submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
