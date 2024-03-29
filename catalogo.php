<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

include("assets/php/conex.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NoteZone - Catálogo</title>

  <!-- Link Icon -->
  <link rel="icon" href="assets/img/logos/logo.png">

  <!-- Links CSS -->
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/publicaciones.css">
  <link rel="stylesheet" href="assets/css/styles.css">

  <!-- sweetalert para ventanas -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <!-- Link Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

  <!-- iconos fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- JavaScript -->
  <script src="assets/js/mostrar-ventana.js" type="text/javascript" defer></script>
  <script src="assets/js/heart.js" type="text/javascript" defer></script>
  <script src="assets/js/carrito.js" type="text/javascript" defer></script>
</head>

<body>
  <header id="header">
    <div class="logo-header">
      <img src="assets/img/logos/logo.png" width="80" height="80" alt="Logo Principal">
      <a class="header-link" href="index.php">NOTEZONE</a>
    </div>

    <input type="checkbox" id="menu" />
    <label for="menu">
      <i class="fas fa-bars menu-icon-mobile"></i>
    </label>

    <nav id="nav-bar" class="nav-bar">
      <a class="nav-link" href="index.php" title="Página Principal">Inicio</a>

      <button class="nav-link link-carrito" id="carrito" title="Agregados al carrito" onclick="mostrarCarrito()"><i class="fas fa-shopping-cart">
          <div id="numero">0</div>
        </i></button>

      <div id="miDiv" style="display: none;">
        <div class="informacionCompra" id="informacionCompra">
          <h2 class="title-carrito">Mi Carrito <i class="fas fa-shopping-cart" style="color: blue;"></i></h2>
          <button class="btn-cerrar-carrito" id="btn-cerrar-carrito" onclick="mostrarCarrito()" title="Cerrar">X</button>
        </div>
        <div class="contenedor-carrito" id="contenedor-carrito">
          <!-- Productos Agregados -->
          <span class="msg-carrito">No tienes nada agregado al carrito. ¡Agrega ahora!</span>
        </div>
        <div class="contenedor-total-btn">
          <div class="total" id="total">Total: $0</div>
          <button class="btn-finalizar-compra" id="btn-finalizarcompra">
            <span class="text">Finalizar Compra</span>
          </button>
        </div>
      </div>

      <button class="nav-link link-heart" title="Tus Productos Favoritos" id="corazon" onclick="mostrarVentanaFavoritos()"><i class="fas fa-heart"></i></button>

      <div id="divFavoritos" style="display: none;">
        <div class="informacionFav">
          <h2 class="title-fav">Tus Favoritos <i class="fas fa-heart" style="color:red;"></i></h2>
          <button class="btn-cerrar-favoritos" id="btn-cerrar-favoritos" title="Cerrar" onclick="mostrarVentanaFavoritos()">X</button>
        </div>
        <div class="contenedor-fav" id="contenedor-fav">
          <!-- Productos Favoritos -->
          <span class="msg-favoritos">No tienes ningún producto que te guste. ¡Agregalos aquí!</span>
        </div>
      </div>

      <a href="assets/php/cerrar-sesion.php" class="nav-link link-sesion" title="Cerrar Sesión" onclick="return confirm('¿Realmente deseas Cerrar Sesión?')">Cerrar Sesión <i class="fas fa-sign-out-alt"></i></a>
      <!-- <a href="" class="nav-link link-sesion" title="Cerrar Sesión"><i class="fas"></i></a> -->
    </nav>
  </header>

  <main>
    <?php
    if (isset($_SESSION['nombre_usuario']) && isset($_SESSION['apellido_usuario'])) {
      $nombre = $_SESSION['nombre_usuario'];
      $apellido = $_SESSION['apellido_usuario'];
    ?>
      <div class="container-bienvenida">
        <p class="text-bienvenida">¡Bienvenid@ <?php echo $nombre . " " . $apellido; ?>!</p>
      </div>
    <?php
    }
    ?>
    <section id="sct-slider-catalogo">
      <h1>La notebook de tus sueños</h1>
    </section>

    <section id="sct-articulos">
      <div class="div-catalogo">
        <ul>
          <li><img src="assets/img/logos/img-lenovo.svg" alt="Logo de Lenovo"></li>
          <li><img src="assets/img/logos/img-asus.svg" alt="Logo de Asus"></li>
          <li><img src="assets/img/logos/img-dell.svg" alt="Logo de Dell"></li>
          <li><img src="assets/img/logos/img-hp.svg" alt="Logo de HP"></li>
          <li><img src="assets/img/logos/img-msi.svg" alt="Logo de MSI"></li>
        </ul>

        <!-- <a href="#">
                    <div class="logo-apple-link">
                        <img src="assets/img/logos/logo-apple-producto.png" alt="Logo de Apple">
                    </div>
                </a> -->
      </div>
      <h3 class="h3-titulo-catalogo"><b>Catálogo</b></h3>
      <div class="contenedor">
        <div class="item-div">

          <div class="item-art" id="item-art-1">
            <div class="contenedor-top">
              <p><img src="assets/img/logos/img-lenovo.svg" width="100" height="100" alt="Logo de Lenovo"></p>
              <p title="Agregar a favoritos" class="p-icon-heart heart"><i class="fas fa-heart"></i></p>
            </div>
            <img src="assets/img/productos/img-post-notebook-lenovo-1.png" alt="imagen-articulo-lenovo-1-Notebook Lenovo 15.6' Legion 5">
            <div class="contenedor-texto">
              <h3 id="nombre-producto">Notebook Lenovo 15.6 Pulgadas Legion 5</h3>
              <span id="precio-producto">$1.249.999</span>
              <button class="button agregar-carrito">Agregar<i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
          <div class="item-art" id="item-art-2">
            <div class="contenedor-top">
              <p><img src="assets/img/logos/img-lenovo.svg" width="100" height="100" alt="Logo de Lenovo"></p>
              <p title="Agregar a favoritos" class="p-icon-heart heart"><i class="fas fa-heart"></i></p>
            </div>
            <img src="assets/img/productos/img-post-notebook-lenovo-2.png" alt="imagen-articulo-lenovo-2-Notebook Lenovo IP 3 14ITL6 Core I3 8G">
            <div class="contenedor-texto">
              <h3 id="nombre-producto">Notebook Lenovo IP 3 14ITL6 Core I3 8G</h3>
              <span id="precio-producto">$714.996</span>
              <button class="button agregar-carrito">Agregar<i class="fas fa-shopping-cart"></i></button>
            </div>

          </div>
          <div class="item-art" id="item-art-3">
            <div class="contenedor-top">
              <p><img src="assets/img/logos/img-lenovo.svg" width="100" height="100" alt="Logo de Lenovo"></p>
              <p title="Agregar a favoritos" class="p-icon-heart heart"><i class="fas fa-heart"></i></p>
            </div>
            <img src="assets/img/productos/img-post-notebook-lenovo-3.png" alt="imagen-articulo-lenovo-3-Notebook Lenovo V15 I3 8G">
            <div class="contenedor-texto">
              <h3 id="nombre-producto">Notebook Lenovo V15 I3 8G</h3>
              <span id="precio-producto">$670.141</span>
              <button class="button agregar-carrito">Agregar<i class="fas fa-shopping-cart"></i></button>
            </div>

          </div>
          <div class="item-art" id="item-art-4">
            <div class="contenedor-top">
              <p><img src="assets/img/logos/img-lenovo.svg" width="100" height="100" alt="Logo de Lenovo"></p>
              <p title="Agregar a favoritos" class="p-icon-heart heart"><i class="fas fa-heart"></i></p>
            </div>
            <img src="assets/img/productos/img-post-notebook-lenovo-4.png" alt="imagen-articulo-lenovo-4-Notebook Lenovo 15.6' Core I7">
            <div class="contenedor-texto">
              <h3 id="nombre-producto">Notebook Lenovo 15.6 Pulgadas Core I7</h3>
              <span id="precio-producto">$2.829.501</span>
              <button class="button agregar-carrito">Agregar<i class="fas fa-shopping-cart"></i></button>
            </div>

          </div>
          <div class="item-art" id="item-art-5">
            <div class="contenedor-top">
              <p><img src="assets/img/logos/img-asus.svg" width="100" height="100" alt="Logo de Asus"></p>
              <p title="Agregar a favoritos" class="p-icon-heart heart"><i class="fas fa-heart"></i></p>
            </div>
            <img src="assets/img/productos/img-post-notebook-asus-5.png" alt="imagen-articulo-asus-5-Notebook Asus Tuf F15 I5-11400h 32gb Ssd">
            <div class="contenedor-texto">
              <h3 id="nombre-producto">Notebook Asus Tuf F15 I5-11400h 32gb Ssd</h3>
              <span id="precio-producto">$959.169</span>
              <button class="button agregar-carrito">Agregar<i class="fas fa-shopping-cart"></i></button>
            </div>

          </div>
          <div class="item-art" id="item-art-6">
            <div class="contenedor-top">
              <p><img src="assets/img/logos/img-asus.svg" width="100" height="100" alt="Logo de Asus"></p>
              <p title="Agregar a favoritos" class="p-icon-heart heart"><i class="fas fa-heart"></i></p>
            </div>
            <img src="assets/img/productos/img-post-notebook-asus-6.png" alt="imagen-articulo-asus-6-Notebook Asus Rog Strix Scar Corei9 16gb 512gb Rtx3060">
            <div class="contenedor-texto">
              <h3 id="nombre-producto">Notebook Asus Rog Strix Scar Corei9 16gb 512gb Rtx3060</h3>
              <span id="precio-producto">$2.999.999</span>
              <button class="button agregar-carrito">Agregar<i class="fas fa-shopping-cart"></i></button>
            </div>

          </div>
          <div class="item-art" id="item-art-7">
            <div class="contenedor-top">
              <p><img src="assets/img/logos/img-dell.svg" width="100" height="100" alt="Logo de Dell"></p>
              <p title="Agregar a favoritos" class="p-icon-heart heart"><i class="fas fa-heart"></i></p>
            </div>
            <img src="assets/img/productos/img-post-notebook-dell-7.png" alt="imagen-articulo-dell-7-Notebook Dell Inspiron 3520 Intel Core I5">
            <div class="contenedor-texto">
              <h3 id="nombre-producto">Notebook Dell Inspiron 3520 Intel Core I5</h3>
              <span id="precio-producto">$633.149</span>
              <button class="button agregar-carrito">Agregar<i class="fas fa-shopping-cart"></i></button>
            </div>

          </div>
          <div class="item-art" id="item-art-8">
            <div class="contenedor-top">
              <p><img src="assets/img/logos/img-dell.svg" width="100" height="100" alt="Logo de Dell"></p>
              <p title="Agregar a favoritos" class="p-icon-heart heart"><i class="fas fa-heart"></i></p>
            </div>
            <img src="assets/img/productos/img-post-notebook-dell-8.png" alt="imagen-articulo-dell-8-Notebook Dell Latitude 3180 negra 11.6'">
            <div class="contenedor-texto">
              <h3 id="nombre-producto">Notebook Dell Latitude 3180 negra 11.6 Pulgadas</h3>
              <span id="precio-producto">$272.999</span>
              <button class="button agregar-carrito">Agregar<i class="fas fa-shopping-cart"></i></button>
            </div>

          </div>
          <div class="item-art" id="item-art-9">
            <div class="contenedor-top">
              <p><img src="assets/img/logos/img-hp.svg" width="100" height="100" alt="Logo de HP"></p>
              <p title="Agregar a favoritos" class="p-icon-heart heart"><i class="fas fa-heart"></i></p>
            </div>
            <img src="assets/img/productos/img-post-notebook-hp-9.png" alt="imagen-articulo-hp-9-Notebook Hp 15-dy2061la Intel Core I3 1125g4">
            <div class="contenedor-texto">
              <h3 id="nombre-producto">Notebook Hp 15-dy2061la Intel Core I3 1125g4</h3>
              <span id="precio-producto">$573.899</span>
              <button class="button agregar-carrito">Agregar<i class="fas fa-shopping-cart"></i></button>
            </div>

          </div>
          <div class="item-art" id="item-art-10">
            <div class="contenedor-top">
              <p><img src="assets/img/logos/img-hp.svg" width="100" height="100" alt="Logo de HP"></p>
              <p title="Agregar a favoritos" class="p-icon-heart heart"><i class="fas fa-heart"></i></p>
            </div>
            <img src="assets/img/productos/img-post-notebook-hp-10.png" alt="imagen-articulo-hp-10-Notebook Hp 15 Core I5 8gb Ram 256gb Ssd">
            <div class="contenedor-texto">
              <h3 id="nombre-producto">Notebook Hp 15 Core I5 8gb Ram 256gb Ssd</h3>
              <span id="precio-producto">$726.208</span>
              <button class="button agregar-carrito">Agregar<i class="fas fa-shopping-cart"></i></button>
            </div>

          </div>
          <div class="item-art" id="item-art-11">
            <div class="contenedor-top">
              <p><img src="assets/img/logos/img-msi.svg" width="100" height="100" alt="Logo de MSI"></p>
              <p title="Agregar a favoritos" class="p-icon-heart heart"><i class="fas fa-heart"></i></p>
            </div>
            <img src="assets/img/productos/img-post-notebook-msi-11.png" alt="imagen-articulo-msi-11-Notebook gamer MSI Pulse 15">
            <div class="contenedor-texto">
              <h3 id="nombre-producto">Notebook gamer MSI Pulse 15</h3>
              <span id="precio-producto">$1.819.999</span>
              <button class="button agregar-carrito">Agregar<i class="fas fa-shopping-cart"></i></button>
            </div>

          </div>
          <div class="item-art" id="item-art-12">
            <div class="contenedor-top">
              <p><img src="assets/img/logos/img-msi.svg" width="100" height="100" alt="Logo de MSI"></p>
              <p title="Agregar a favoritos" class="p-icon-heart heart"><i class="fas fa-heart"></i></p>
            </div>
            <img src="assets/img/productos/img-post-notebook-msi-12.png" alt="imagen-articulo-msi-12-Notebook Msi Modern Ryzen 7 7730u">
            <div class="contenedor-texto">
              <h3 id="nombre-producto">Notebook Msi Modern Ryzen 7 7730u</h3>
              <span id="precio-producto">$787.149</span>
              <button class="button agregar-carrito">Agregar<i class="fas fa-shopping-cart"></i></button>
            </div>

          </div>

        </div>
      </div>
    </section>

    <section class="maps">
      <div class="txt-ubi">
        <h2>Ubicación</h2>
      </div>
      <iframe title="Mapa" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26253.896922674234!2d-58.388026511442156!3d-34.66134141832057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a3335230bd052b%3A0x9d632a18eea90a31!2sAvellaneda%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1698596364060!5m2!1ses!2sar" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </section>

    <h1 class="txt-noticias">Contactate con nosotros</h1>

  </main>

  <footer>
    <div class="footer-container">
      <div class="item">
        <span class="location-span">Buenos Aires, Argentina</span>
        <br>
        <a href="https://www.instagram.com" class="social-icon"><i class="fab fa-instagram"></i> Instagram</a>
        <a href="https://www.x.com" class="social-icon"><i class="fab fa-twitter"></i> Twitter</a>
        <br>
        <a href="https://www.facebook.com" class="social-icon"><i class="fab fa-facebook"></i> Facebook</a>
        <a href="https://www.youtube.com" class="social-icon"><i class="fab fa-youtube"></i> Youtube</a>
      </div>
      <div class="item">
        <span class="privacidad-span">Esta página respeta tu privacidad y se compromete a proteger la información personal que compartes con nosotros. Consulta nuestra política de privacidad para obtener más detalles sobre cómo manejamos y utilizamos tus datos.</span>
      </div>
    </div>
  </footer>
</body>

</html>