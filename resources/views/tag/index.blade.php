@extends('master')
@section('title', 'Halaman Utama Portal - Kabar Burung')
@extends('layouts.app')

@section('content')
@section('body')
@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($message = Session::get('error'))
      <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($message = Session::get('warning'))
      <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('info'))
      <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
    @endif

    @if ($errors->any())
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        Please check the form below for errors
    </div>
    @endif
<a href="/tag/create" type="button" class="btn btn-primary"> + Tambah</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Tag</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=0 ?>
            @foreach (App\Tag::all() as $post)
            <?php $no++ ?>
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $post->nama_tag}}</td>
                <td>{{ $post->created_at->format('M d, Y') }}</td>
                <td>
                    <a href="/tag/edit/{{ $post->id }}" type="button" class="btn btn-primary">Edit</a>
                    |
                    <a href="/tag/destroy/{{ $post->id }}" type="button" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop