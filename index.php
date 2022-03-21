<?php
$productsJSON = file_get_contents("./products.json");
$products = json_decode($productsJSON);
?>


<!DOCTYPE php>
<php lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Frontend Store</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&family=Staatliches&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="build/css/app.css" />
    </head>

    <body>
        <header class="header">
            <a href="index.php">
                <img class="header__logo" src="build/img/logo.png" alt="Logotipo">
            </a>
        </header>

        <nav class="navegacion">
            <a class="navegacion__enlace navegacion__enlace--activo" href="index.php">Tienda</a>
            <a class="navegacion__enlace" href="nosotros.php">Nosotros</a>
        </nav>

        <main class="contenedor">
            <h1>Nuestros productos</h1>

            <div class="grid">

                <?php
                foreach ($products as $product) : ?>
                    <div class="producto">
                        <a href="producto.php?id=<?php echo $product->id ?>">
                            <img class="producto__imagen" src="build/img/<?php echo $product->id ?>.jpg" alt="imagen camisa">
                            <div class="producto__informacion">
                                <p class="producto__nombre"><?php echo $product->title ?></p>
                                <p class="producto__precio">$<?php echo $product->price ?></p>
                            </div>
                        </a>
                    </div>
                <?php
                endforeach;
                ?>

                <div class="grafico grafico--camisas"></div>
                <div class="grafico grafico--node"></div>
            </div>

        </main>

        <footer class="footer">
            <p class="footer__texto">Frontend Store - Todos los derechos reservados</p>
        </footer>
    </body>
</php>