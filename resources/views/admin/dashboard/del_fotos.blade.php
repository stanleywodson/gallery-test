@extends('adminlte::page')

@section('title', 'Excluir Diretório')

@section('content_header')
<h1>Excluir Foto</h1>
@stop

@section('content')

@if(session('msgex'))
<div class="alert alert-danger" role="alert">{{session('msgex')}}</div>
@endif
@foreach($folders as $folder)
        <div class="card" style="padding: 30px;">
           <a href="{{route('gallery.show',['directory'=>$folder])}}">
            <figure class="figure">
                <img style="height:50px;" src="{{asset('assets/images/foldericon.png')}}" class="img-folder" alt="">
                <figcaption class="figure-caption">{{$folder}}</figcaption>
            </figure>
            </a> 
        </div>  

        @endforeach
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop