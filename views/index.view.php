<?php require 'views/header.php';?>

    <div class="container">
        <div class="posts">

        <?php foreach($posts as $post) : ?>
            <div class="post">
                <article>
                    <h1 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo']; ?></a></h1>
                    <p class="fecha"><?php echo $post['fecha']; ?></p>
                    <div class="thumb">
                        <a href="single.php?id=<?php echo $post['id']; ?>">
                            <img src="<?php echo RUTA; ?>/img/<?php echo $post['thumb']; ?>">
                        </a>
                    </div>
                    <p class="extracto"><?php echo $post['extracto']; ?></p>
                    <a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar leyendo...</a>
                </article>
            </div>
        <?php endforeach; ?>

        </div>
        

        <div class="side-bar">
        
        </div>
        
    </div>

    <?php require 'views/paginacion.php';?>
</body>
</html>