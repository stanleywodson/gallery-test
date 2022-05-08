<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <title>Galeria-gestão</title>

</head>

<body>
    <div class="container">


        <h1>Galeria fotos Igreja</h1>

        @if(session('msggr'))
            <div class="alert alert-success" role="alert">{{session('msggr')}}</div>
        @elseif(session('msgp')) 
            <div class="alert alert-warning" role="alert">{{session('msgp')}}</div>   
        @endif

        <form method="post" action="{{route('gallery.uploadimages')}}" enctype="multipart/form-data">
        @csrf
            
            <select class="form-select" aria-label="Default select example" name="options" id="">
                <option value="0" selected>Escolha ou/ Crie um Diretório</option>

                @foreach($folders as $folder)
                <option value="{{$folder}}">{{$folder}}</option>
                @endforeach

            </select>

            <br>

            <div class="mb-3">
                <label for="formFile" class="form-label">Adicionar Fotos</label>
                <input class="form-control" type="file" id="formFile" name="files[]" multiple>
            </div>

            <button type="submit" class="btn btn-secondary">Criar</button>
        </form>
        
        <hr>

        <h5>Criar Diretório</h5>

        @if(session('msg'))
            <div class="alert alert-primary" role="alert">{{session('msg')}}</div>
        @endif

        <form method="post" action="{{route('gallery.makedir')}}">
            @csrf
            <div class="mb-3">
                <label for="formCreate" class="form-label"></label>
                <input class="form-control" type="text" name="create_dir" id="formCreate" placeholder="Escolha um nome fofinho" aria-label="default input example">
            </div>
            <button type="submit" class="btn btn-secondary">Criar</button>
        </form>

        <hr>

        <h5>Excluir Diretório</h5>

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

        <hr>

        <h5>Selecionar diretório</h5>

        @foreach($folders as $folder)
           
           <a href="{{route('gallery.show',['directory'=>$folder])}}">
            <figure class="figure">
                <img src="{{asset('assets/images/foldericon.png')}}" class="img-folder" alt="">
                <figcaption class="figure-caption">{{$folder}}</figcaption>
            </figure>
            </a> 

        @endforeach
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </div>

</body>

</html>