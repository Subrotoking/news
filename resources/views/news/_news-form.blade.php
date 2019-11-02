<div class="form-group">
    {!! Form::label('kategori', 'Kategori') !!}
    @if(count($list_berita)>0)
        {!! Form::select('id_kategori',$list_berita, null,
        ['class'=>'form-control','id'=>'id_kategori','placeholder'=>'Pilih Kategori']) !!}
    @else
        <p>tidak ada pilihan Kategori</p>
    @endif
</div>

<div class="form-group">
    {!! Form::label('tag', 'Tag Berita') !!}
    @if(count($list_tag)>0)
        @foreach($list_tag as $key => $value)
            <div class="checkbox">
                <label>{!! Form::checkbox('tag[]',$key, null) !!}
                    {{ $value }}
                </label>
            </div>
        @endforeach
    @else
        <p>tidak ada pilihan</p>
@endif

<div class="form-group">
    {!! Form::label('tag', 'Tag Berita') !!}
    @if(count($list_tag)>0)
        @foreach($list_tag as $key => $value)
            <div class="checkbox">
                <label>{!! Form::checkbox('tag_post[]',$key, null)!!}
                    {{ $value }}
                </label>
            </div>
        @endforeach
    @else
        <p>tidak ada pilihan</p>
    @endif
</div>