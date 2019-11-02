@extends('master')
@section('title', 'Halaman Utama Portal - Kabar Burung')
@extends('layouts.app')

@section('content')
@section('body')
<a href="/kategori/create" type="button" class="btn btn-primary"> + Tambah</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=0 ?>
            @foreach (App\Kategori::all() as $post)
            <?php $no++ ?>
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $post->nama_kategori}}</td>
                <td>{{ $post->created_at->format('M d, Y') }}</td>
                <td>
                    <a href="/kategori/edit/{{ $post->id }}" type="button" class="btn btn-primary">Edit</a>
                    |
                    <a href="/kategori/{{ $post->id }}" type="button" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop