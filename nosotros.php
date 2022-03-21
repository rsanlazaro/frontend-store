<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Frontend Store</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&family=Staatliches&display=swap" rel="stylesheet" />
  <link rel="preload" href="build/css/app.css" />
  <link rel="stylesheet" href="build/css/app.css" />
</head>

<body>
  <header class="header">
    <a href="index.php">
      <img class="header__logo" src="build/img/logo.png" alt="Logotipo">
    </a>
  </header>

  <nav class="navegacion">
    <a class="navegacion__enlace" href="index.php">Tienda</a>
    <a class="navegacion__enlace navegacion__enlace--activo" href="nosotros.php">Nosotros</a>
  </nav>

  <main class="contenedor">
    <h1>Sobre nosotros</h1>
    <div class="nosotros">
      <div class="nosotros__contenido">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil a
          quaerat quae voluptates fuga magni quas libero autem deserunt,
          perferendis expedita quibusdam reprehenderit impedit ab nisi ratione
          pariatur officiis consectetur.
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem sunt
          excepturi, quam dicta dolor commodi similique eos, itaque, adipisci
          aut modi distinctio repellat unde. Reiciendis et autem optio
          architecto quos?
        </p>
      </div>
      <img class="nosotros__imagen" src="build/img/nosotros.jpg" alt="Imagen nosotros" />
    </div>
  </main>

  <section class="contenedor comprar">
    <h2 class="comprar__titulo">Por qué comprar con nosotros</h2>
    <div class="bloques">
      <div class="bloque">
        <img src="build/img/icono_1.png" alt="porque comprar" />
        <h3 class="bloque__titulo">El mejor precio</h3>
        <p class="bloque__descripcion">
          Pellentesque habitant morbi tristique senectus et netus et malesuada
          fames ac turpis egestas
        </p>
      </div>

      <div class="bloque">
        <img src="build/img/icono_2.png" alt="porque comprar" />
        <h3 class="bloque__titulo">Para devs</h3>
        <p class="bloque__descripcion">
          Pellentesque habitant morbi tristique senectus et netus et malesuada
          fames ac turpis egestas
        </p>
      </div>

      <div class="bloque">
        <img src="build/img/icono_3.png" alt="porque comprar" />
        <h3 class="bloque__titulo">Envío gratis</h3>
        <p class="bloque__descripcion">
          Pellentesque habitant morbi tristique senectus et netus et malesuada
          fames ac turpis egestas
        </p>
      </div>

      <div class="bloque">
        <img src="build/img/icono_4.png" alt="porque comprar" />
        <h3 class="bloque__titulo">La mejor calidad</h3>
        <p class="bloque__descripcion">
          Pellentesque habitant morbi tristique senectus et netus et malesuada
          fames ac turpis egestas
        </p>
      </div>
    </div>
  </section>

  <footer class="footer">
    <p class="footer__texto">
      Frontend Store - Todos los derechos reservados
    </p>
  </footer>
</body>

</html>