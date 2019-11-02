<?php

namespace App\Http\Controllers;
use App\Post;
use App\Pencipta;
use App\Kategori;
use App\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function berita(){
        $users = DB::table('posts')->paginate(1);
        return view('news.berita',['users' => $users]);
    }
    public function allberita($id){
        $post = \App\Post::findOrFail($id);
        $users = DB::table('posts')->paginate(1);
        return view('news.allBerita',compact('users','post'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_berita = Kategori::all()->pluck('nama_kategori','id');
        $list_tag = Tag::all()->pluck('nama_tag','id');
        return view('news.create',compact('list_berita','list_tag'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = \App\Post::create($request->all());
        $pencipta = new Pencipta;
        $pencipta->nama_pencipta = $request->input('nama_pencipta');
        $post->pencipta()->save($pencipta);
        $post->tag()->attach($request->input('tag_post'));
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = \App\Post::findOrFail($id);
        $post->nama_pencipta = $post->pencipta->nama_pencipta;
        $list_berita = Kategori::all()->pluck('nama_kategori','id');
        $list_tag = Tag::all()->pluck('nama_tag','id');
        return view('news.edit',
        compact('post','list_berita','list_tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $post = \App\Post::findOrFail($id);
        $post->update($request->all());
        $pencipta = $post->pencipta;
        $pencipta->nama_pencipta = $request->input('nama_pencipta');
        $post->pencipta()->save($pencipta);
        $post->tag()->sync($request->input('tag_post'));
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = \App\Post::findOrFail($id);
        $post->delete();
        return redirect('/post');
    }
}
