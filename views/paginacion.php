<?php
$numero_paginas = numberPages($blog_config['post_per_page'], $conexion);
?>

<section>
    <ul>
        <?php if (current_page() == 1) : ?>
            <li class="disabled">&laquo;</li>

        <?php else : ?>
            <li><a href="index.php?page=<?php echo current_page() - 1; ?>">&laquo;</a></li>
        <?php endif; ?>
        
        <?php for ($i = 1; $i <= $numero_paginas; $i++) : ?>
            <?php if (current_page() === $i) : ?>
                <li class="active"><?php echo $i; ?></li>

            <?php else : ?>
                <li><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if (current_page() == $numero_paginas) : ?>
            <li class="disabled">&raquo;</li>

        <?php else : ?>
            <li><a href="index.php?page=<?php echo current_page() + 1; ?>">&raquo;</a></li>
        <?php endif; ?>
    </ul>
</section>