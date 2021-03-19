<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <script src="https://kit.fontawesome.com/87f377c3df.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <div class="bar">
            <div class="bar-left">
                <span class="logo">PulpiDevs</span>
            </div>

            <div class="bar-right">
                <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="GET" autocomplete="off">
                    <input type="text" name="busqueda" placeholder="Buscar"/>
                    <button type="submit" class="fa fa-search"></button>
                </form>

                <div class="menu">
                    <a href="#"><i class="icon fa fa-twitter"></i></a>
                    <a href="#"><i class="icon fa fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </header>