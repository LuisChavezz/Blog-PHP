<?php require '../views/header.php'; ?>

<h1>Panel de Control</h1>
<a href="create.php">Crear nuevo post</a><br/>
<a href="cerrar.php">Cerrar Sesión</a>

<div class="container">
    <div class="posts">

    <?php foreach($posts as $post) : ?>
        <div class="post">
            <article>
                <h1 class="titulo"><?php echo $post['titulo']; ?></a></h1>
                <p class="fecha"><?php echo fecha($post['fecha']); ?></p>
                <a href="edit.php?id=<?php echo $post['id']; ?>">Editar</a>
                <a href="delete.php?id=<?php echo $post['id']; ?>">Eliminar</a>
            </article>
        </div>
    <?php endforeach; ?>

    </div>
    

    <div class="side-bar">
    
    </div>
        
</div>

<?php require '../views/paginacion.php';?>