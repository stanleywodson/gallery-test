@extends('adminlte::page')

@section('title', 'Adição de Fotos')

@section('content_header')
@stop

@section('content')

@if(session('msg'))
<div class="alert alert-primary" role="alert">{{session('msg')}}</div>
@endif
<div class="card" style="padding: 10px;">
    <div class="card-header" style="background-color: gray; color:aliceblue">Criar directório</div>
<form method="post" action="{{route('gallery.makedir')}}">
    @csrf
    <div class="mb-3">
        <label for="formCreate" class="form-label"></label>
        <input class="form-control" type="text" name="create_dir" id="formCreate" placeholder="Escolha um nome fofinho" aria-label="default input example">
    </div>
    <button type="submit" class="btn btn-secondary">Criar</button>
</form>
</div>
<div class="card">
    <div class="card-header" style="background-color: gray; color:aliceblue">Excluir Diretório</div>
    <div class="card-body">
    @if(session('msgex'))
            <div class="alert alert-danger" role="alert">{{session('msgex')}}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">diretórios</th>
                    <th scope="col">ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($folders as $folder)
                <tr>
                    <td>{{$folder}}</td>
                    <td><a class="btn btn-danger" href="javascript:if(confirm('Tem certeza que deseja excluir esse diretório?')){location='{{route('gallery.deldir', ['directory'=>$folder])}}'}">delete</td>
                </tr>
                @endforeach
            </tbody>
        </table>
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