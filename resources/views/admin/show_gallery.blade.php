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
    <h1>Página Teste</h1>
    <hr>
    <?php
    foreach ($galleries as $t) {
        $d = explode('/', $t->filename);
    ?>
        <div class="gallery">
            <a target="_blank" href="img_5terre.jpg">
                <img src="{{asset('storage/'.$d[0].'/'.$d[1])}}" alt="Cinque Terre" width="600" height="400">
            </a>
            <div class="desc">{{$d[0]}}</div>
        </div>
    <?php
    }
    ?>
</body>