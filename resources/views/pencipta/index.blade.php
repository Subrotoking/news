@extends('master')
@section('title', 'Halaman Utama Portal - Kabar Burung')
@extends('layouts.app')

@section('content')
@section('body')
<a href="/pencipta/create" type="button" class="btn btn-primary"> + Tambah</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Pencipta</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=0 ?>
            @foreach (App\Pencipta::all() as $post)
            <?php $no++ ?>
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $post->nama_pencipta}}</td>
                <td>{{ $post->created_at->format('M d, Y') }}</td>
                <td>
                    <a href="/pencipta/edit/{{ $post->id_berita }}" type="button" class="btn btn-primary">Edit</a>
                    |
                    <a href="/pencipta/destroy/{{ $post->id_berita }}" type="button" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop