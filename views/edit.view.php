<?php require '../views/header.php'; ?>

<h1>Crear nuevo artículo</h1>

<div class="container">
    <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        
        <input type="hidden" value="<?php echo $post['id']; ?>" name="id"/>
        
        <input type="text" name="titulo" value="<?php echo $post['titulo']; ?>" />
        <input type="text" name="extracto" value="<?php echo $post['extracto']; ?>" />
        <textarea name="texto" ><?php echo $post['texto']; ?></textarea>
        
        <input type="file" name="thumb">

        <input type="hidden" value="<?php echo $post['thumb']; ?>" name="thumb-saved"/>

        <button type="submit">CREAR</button>
    </form>

    <div class="side-bar">
    
    </div>
        
</div>