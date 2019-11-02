@extends('master')
@extends('layouts.app')

@section('content')
@section('body')
{!! Form::model($kategori , ['url'=>'kategori/update/' . $kategori->id, 'method'=>'put']) !!}
 <div class="form-group">
 {!! Form::label('kategori', 'Kategori') !!}
 {!! Form::text('nama_kategori', null, ['class'=>'form-control'])
!!}
 </div>
 {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!} 
 {!! Form::close() !!} 
 @stop