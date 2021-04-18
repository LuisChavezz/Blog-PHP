<?php require 'views/header.php';?>

<div class="container">
    <div class="posts">
        <div class="post">
            <article>
                <h1 class="titulo"><?php echo $post['titulo']; ?></h1>
                <p class="fecha"><?php echo fecha($post['fecha']); ?></p>
                <div class="thumb">
                    <img src="<?php echo RUTA; ?>/img/<?php echo $post['thumb']; ?>">
                </div>
                <p class="extracto"><?php echo nl2br($post['texto']); ?></p>
            </article>
        </div>
    </div>
</div>