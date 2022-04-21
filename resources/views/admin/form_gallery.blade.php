<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Galeria fotos Igreja</h1>
    <form action="{{route('gallery.uploadimages')}}" method="post" enctype="multipart/form-data">
        @csrf
        <hr>
        Selecione onde quer salvar:
        <br>
       
        <select name="options" id="">
            @foreach($folders as $folder)
            <option value="{{$folder}}">{{$folder}}</option>
            @endforeach
        </select>
        <br>
        <br>
        Arquivos:
        <br>
        <input type="file" name="files[]" multiple>
        <button type="submit">Enviar</button>
    </form>
    <hr>
    <h2>Criar pasta</h2>
    <form method="post" action="{{route('gallery.makedir')}}">
        @csrf
        name of folder:
        <input type="text"  name="create_dir">
        <button value="submit">Criar</button>
    </form>
    <hr>
    <h1>Excluir diretório</h1>

    @foreach($folders as $folder)
            <a href="{{url('/gallery/'.$folder.'/deldir')}}">
            <img  src="" alt="" width="80" height="80">
            {{$folder}}
            </a>
            @endforeach
</body>
</html>