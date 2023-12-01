<!DOCTYPE html>
<html lang="mg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/assets/dist/css/bootstrap.css">
    <title><?=empty($title) ? "Fiangonana voalohany" : $title?></title>
    <script type="text/javascript" src="public/assets/dist/js/bootstrap.bundle.js" defer></script>
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="http://<?=$_SERVER['SERVER_NAME']?>/fiangonana/" class="nav-link px-2 text-secondary">Fandraisana</a></li>
                    <li><a href="http://<?=$_SERVER['SERVER_NAME']?>/fiangonana/toriteny.php" class="nav-link px-2 text-white">Toriteny</a></li>
                    <li><a href="http://<?=$_SERVER['SERVER_NAME']?>/fiangonana/fotoamBavaka.php" class="nav-link px-2 text-white">Fotoam-bavaka</a></li>
                    <li><a href="http://<?=$_SERVER['SERVER_NAME']?>/fiangonana/tetiandro.php" class="nav-link px-2 text-white">Tetiandro</a></li>
                    <li class="dropdown">
                        <button id="btn-sampana-nav" type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Sampana</button>
                        <ul class="dropdown-menu" aria-labelledby="btn-sampana-nav">
                            <li><a href="http://<?=$_SERVER['SERVER_NAME']?>/fiangonana/sampana.php" class="dropdown-item">Tanora</a></li>
                            <li><a href="http://<?=$_SERVER['SERVER_NAME']?>/fiangonana/sampana.php" class="dropdown-item">Ankizy</a></li>
                            <li><a href="http://<?=$_SERVER['SERVER_NAME']?>/fiangonana/sampana.php" class="dropdown-item">Renim-pianakaviana</a></li>
                        </ul>
                    </li>
                </ul>


                <div class="text-end">
                    <a href="http://<?=$_SERVER['SERVER_NAME']?>/fiangonana/fanohanana.php" class="btn btn-outline-light me-2">Fanohanana</a>
                </div>
            </div>
        </div>
    </header>
