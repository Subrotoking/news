@extends('master')
@section('title', 'Halaman Utama Portal - Kabar Burung')
@extends('layouts.app')

@section('content')
@section('body')
@foreach (App\Post::all() as $post)
            <div class="col-sm-12">
            <div class="col-sm-12" style="background-color:lavender;">
                <h5 style='text-align:center;'>
                <a href="#"  class="judul" >{{ $post->title }}</a>
                </h5>
                <h6 style='text-align:right;'>Organized by : {{ !empty($post->pencipta->nama_pencipta) ? $post->pencipta->nama_pencipta : '-' }}</h6>
                <h6 >{{ $post->created_at->format('M d, Y') }}</h6>
                <p class="ArticleBody">
                {{$post->content}}
                </p>
                <!-- <div style='text-align:justify;'><p>{{ $post->content }}</p></div> -->
                <h6>Category : {{ !empty($post->kategori->nama_kategori) ? $post->kategori->nama_kategori : '-' }}</h6>
                <h6> Tag :
                        @foreach($post->tag as $item)
                            <a href="#" class="tag">
                                {{ $item->nama_tag }},
                            </a>
                        @endforeach
                </h6>
                <h3><br></h3>
            </div>
            </div>
          @endforeach
          {{ $users->links() }}
@stop