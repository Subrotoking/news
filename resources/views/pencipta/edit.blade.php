@extends('master')
@extends('layouts.app')

@section('content')
@section('body')
{!! Form::model($list_berita , ['url'=>'pencipta/update/' . $list_berita->id_berita, 'method'=>'put']) !!}
<legend>Create Berita</legend>
<div class="form-group">
 {!! Form::label('id_berita', 'id_berita') !!}
    @if(count($list_berita)>0)
        {!! Form::select('id_berita',$list_berita, null,
        ['class'=>'form-control','id'=>'id_berita','placeholder'=>'Pilih Berita']) !!}
    @else
        <p>tidak ada pilihan pencipta</p>
    @endif
 </div>
 <div class="form-group">
 {!! Form::label('pencipta', 'pencipta') !!}
 {!! Form::text('nama_pencipta', null, ['class'=>'form-control'])
!!}
 </div>
 {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!} 
 {!! Form::close() !!} 
 @stop