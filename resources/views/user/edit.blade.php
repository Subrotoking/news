@extends('master')
@section('title', 'Halaman Utama Portal - Kabar Burung')
@extends('layouts.app')

@section('content')
@section('body')
{!! Form::model($user, ['route' => ['user.update', $user],'method'=>'PUT']) !!}
@include('user._user-form')
{!! Form::close() !!}