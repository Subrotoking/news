@extends('master')
@extends('layouts.app')

@section('content')
@section('body')
{!! Form::open(['url'=>'kategori/store']) !!} 
 <div class="form-group">
 {!! Form::label('kategori', 'Kategori') !!}
 {!! Form::text('nama_kategori', null, ['class'=>'form-control'])
!!}
 </div>
 {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!} 
 {!! Form::close() !!} 
 @stop