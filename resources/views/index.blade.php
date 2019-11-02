@extends('master')
@section('title', 'Halaman Utama Portal - Kabar Burung')
@extends('layouts.app')

@section('content')
@section('body')
<a href="/create" type="button" class="btn btn-primary"> + Tambah</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Published</th>
                <th>Pencipta</th>
                <th>Kategori</th>
                <th>Tag</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=0 ?>
            @foreach (App\Post::all() as $post)
            <?php $no++ ?>
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->published }}</td>
                <td>{{ !empty($post->pencipta->nama_pencipta) ? $post->pencipta->nama_pencipta : '-' }}</td>
                <td>{{ !empty($post->kategori->nama_kategori) ? $post->kategori->nama_kategori : '-' }}</td>
                <!-- //<td>{{!empty($post->tag->nama_tag) ? $post->tag->nama_tag : '-'}}</td> -->
                <td>
                @foreach($post->tag as $item)
                {{ $item->nama_tag }},
                @endforeach
                </td>
                <td>{{ $post->created_at->format('M d, Y') }}</td>
                <td>
                    <a href="/edit/{{ $post->id }}" type="button" class="btn btn-primary">Edit</a>
                    |
                    <a href="/destroy/{{ $post->id }}" type="button" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop