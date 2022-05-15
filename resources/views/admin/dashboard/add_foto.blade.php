@extends('adminlte::page')

@section('title', 'Adição de Fotos')

@section('content_header')
<h1>Adicionar Fotos</h1>
@stop

@section('content')


@if(session('msggr'))
<div class="alert alert-success" role="alert">{{session('msggr')}}</div>
@elseif(session('msgp'))
<div class="alert alert-warning" role="alert">{{session('msgp')}}</div>
@endif
<!-- <div class="card">
    <div class="card-body">
        <form method="post" action="{{route('gallery.addimages')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <select class="form-select" aria-label="Default select example" name="options" id="">
                    <option value="0" selected>Escolha ou/ Crie um Diretório</option>

                    @foreach($folders as $folder)
                    <option value="{{$folder}}">{{$folder}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Adicionar Fotos</label>
                <input class="form-control" type="file" id="formFile" name="files[]" multiple>
            </div>

            <button type="submit" class="btn btn-secondary">Criar</button>
        </form>
    </div>
</div> -->
<div class="card">
    <div class="card-body">
        <form method="post" action="{{route('gallery.addimages')}}" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Diretório</label>
                <select class="form-select" id="inputGroupSelect01" name="options">
                    <option selected>Selecionar Diretório</option>
                    @foreach($folders as $folder)
                    <option value="{{$folder}}">{{$folder}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Adicionar Fotos</label>
                <input class="form-control" type="file" id="formFile" name="files[]" multiple>
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
    </div>
</div>

</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop