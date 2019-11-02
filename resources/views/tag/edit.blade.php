@extends('master')
@extends('layouts.app')

@section('content')
@section('body')
{!! Form::model($tag , ['url'=>'tag/update/' . $tag->id, 'method'=>'put']) !!}

 <div class="form-group">
 {!! Form::label('tag', 'tag') !!}
 {!! Form::text('nama_tag', null, ['class'=>'form-control'])
!!}
 </div>
 {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!} 
 {!! Form::close() !!} 
 @stop