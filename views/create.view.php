<?php require '../views/header.php'; ?>

<h1>Crear nuevo artículo</h1>

<div class="container">
    <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" name="titulo" placeholder="Titulo del artículo"/>
        <input type="text" name="extracto" placeholder="Extracto del artículo"/>
        <textarea name="texto" placeholder="Contenido del artículo"></textarea>
        
        <input type="file" name="thumb">

        <button type="submit">CREAR</button>
    </form>

    <div class="side-bar">
    
    </div>
        
</div>