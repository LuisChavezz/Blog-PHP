<?php require 'header.php';?>

<div class="container">
    <div class="posts">
        <div class="post">
            <article>
                <h1 class="titulo">Iniciar Sesión</h1>

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
                    <input type="text" name="user" placeholder="Usuario"/>
                    <input type="password" name="password" placeholder="Contraseña"/>
                    <input type="submit" value="Iniciar Sesión" />
                </form>
            </article>
        </div>
    </div>
</div>