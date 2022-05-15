@extends('adminlte::page')

@section('title', 'Excluir Diretório')

@section('content_header')
<h1>Excluir Diretório</h1>
@stop

@section('content')

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

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop