<?php
$productsJSON = file_get_contents("./src/data/products.json");
$products = json_decode($productsJSON);
$id = $_GET["id"] - 1
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Frontend Store</title>
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&family=Staatliches&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="build/css/app.css" />
</head>

<body>
  <header class="header">
    <a href="index.php">
      <img class="header__logo" src="build/img/logo.png" alt="Logotipo" />
    </a>
  </header>

  <nav class="navegacion">
    <a class="navegacion__enlace" href="index.php">Tienda</a>
    <a class="navegacion__enlace" href="nosotros.php">Nosotros</a>
  </nav>

  <main class="contenedor">
    <h1><?php echo $products[$id]->title ?></h1>

    <div class="camisa">
      <img class="camisa__imagen" src="build/img/<?php echo $products[$id]->id ?>.jpg" alt="producto imagen" />
      <div class="camisa__contenido">
        <p>
          <?php echo $products[$id]->description ?>
          $<?php echo $products[$id]->price ?>
        </p>

        <form class="formulario" action="producto.php?id=<?php echo $products[$id]->id ?>">
          <select class="formulario__campo" name="" id="">
            <option class="formulario__campo--opcion" disabled selected>
              -Talla-
            </option>
            <option class="formulario__campo--opcion">Chica</option>
            <option class="formulario__campo--opcion">Mediana</option>
            <option class="formulario__campo--opcion">Grande</option>
          </select>
          <input class="formulario__campo" type="number" placeholder="Cantidad" min="1" />
          <input class="formulario__submit" type="submit" value="Agregar al carrito" />
        </form>
      </div>
    </div>
  </main>

  <footer class="footer">
    <p class="footer__texto">
      Frontend Store - Todos los derechos reservados
    </p>
    <script src="src/js/app.js"></script>
  </footer>
</body>

</html>