<!DOCTYPE html>
<html>

<head>
    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }
    </style>
</head>

<body>

    <br>
    <!--TESTE---->
        @foreach($array as $foto)
            @if($foto->folders == 'Batismo')
                {{$foto->filename}}
            @elseif($foto->folders == 'dfsdfsdfsdf')
                {{$foto->filename}}
            @endif
        @endforeach
    <!--####################-->
        
    <h1>Página Teste</h1>
    <hr>
    <?php
    foreach ($galleries as $t) {
        $d = explode('/', $t->filename);
    ?>

    <?php
    }
    ?>
</body>