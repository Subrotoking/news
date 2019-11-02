@extends('master')
@section('title', 'Halaman Utama Portal - Kabar Burung')
@extends('layouts.app')

@section('content')
@section('body')
{!! Form::open(['route' => 'user.store'])!!}
@include('user._user-form')
{!! Form::close() !!}
@stop