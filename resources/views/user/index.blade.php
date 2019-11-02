@extends('master')
@section('title', 'Halaman Utama Portal - Kabar Burung')
@extends('layouts.app')

@section('content')
@section('body')
    <a href="/user/create" type="button" class="btn btn-primary"> + Tambah</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=0 ?>
            @foreach (App\User::all() as $user)
            <?php $no++ ?>
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->level }}</td>
                <td>{!! Form::model($user, ['route' => ['user.destroy',$user], 'method'=>'delete', 'class' => 'forminline'])!!} 
                <a href="{{ route('user.edit', $user) }}" class="btn btn-xs btn-primary">edit</a> |
                {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger'])!!}
                {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
        
