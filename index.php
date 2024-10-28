<?php
function conexionBD(){ //Esta función hace el proceso interno del a conexion a la BD, retornando como tal toda la conexion para poder asignarla a una variable


//Credenciales de la BD
$usuario="root";
$password="";
$servidor="localhost";
$bd="inmobiliaria";

//Creo la conexión con mysql_connect()
$conexion= mysqli_connect($servidor,$usuario,$password,$bd)or die("no se pudo conectar");


//retorna la conexzión
return $conexion;

}
$conexion =conexionBD();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- titulo pestaña-->
    <title>Inmobiliaria Pelaez</title>

    <!-- icono-->
    <link rel="icon" type="image/x-icon" href="img/icono.ico" />

    <!-- iconos de servicios -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />

    <!-- Styles del boostrap-->
    <link href="css/styles.css" rel="stylesheet" />

</head>
<body id="page-top">

<!-- Header-->
<header class="masthead d-flex align-items-center">
    <div class="container px-4 px-lg-5 text-center">
        <h1 class="mb-1" style="color: #ffffff;">Inmobiliaria Pelaez</h1>
        <a class="btn btn-primary btn-xl" href="#about">Conocenos</a>
    </div>

</header>
<!-- About-->
<section class="content-section bg-light" id="about">
    <div class="container px-4 px-lg-5 text-center">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-10">
                <h2>Explora nuestro portafolio diseñado para ti</h2>
                <p class="lead mb-5">
                    Encuentra tu próximo hogar entre nuestros apartamentos disponibles
                    <a href="menu/portafolio.php">aquí</a>
                    !
                </p>
                <a class="btn btn-dark btn-xl" href="#services">Nuestros servicios</a>
            </div>
        </div>
    </div>
</section>

<!-- Services-->
<!-- El link para modificar los iconos y ver los disponibles: https://simplelineicons.github.io/ -->
<section class="content-section bg-primary text-white text-center" id="services">
    <div class="container px-4 px-lg-5">
        <div class="content-section-heading">
            <h3 class="text-secondary mb-0">Servicios</h3>
            <h2 class="mb-5">Explora nuestros servicios diseñados para tus necesidades</h2>
        </div>
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-home"></i></span> <!-- en la parte que dice "icon-home" estoy determinando que icono va en ese espacio-->
                <h4><strong>Alquiler</strong></h4>
                <p class="text-faded mb-0">Te ofrecemos una amplia variedad de apartamentos en las mejores ubicaciones. Encuentra tu hogar ideal con opciones flexibles de estadías cortas o sin límite de tiempo, adaptándonos a tus necesidades.</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-briefcase"></i></span>
                <h4><strong>Gestión de propiedades</strong></h4>
                <p class="text-faded mb-0">Servicio de administración integral de apartamentos para propietarios, que incluye la recolección de rentas, mantenimiento y atención a inquilinos. Esto le permite a los dueños de las propiedades delegar todas las tareas operativas.</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-cup"></i></span>
                <h4><strong>Alquiler con servicios incluidos</strong></h4>
                <p class="text-faded mb-0">
                    Ofrecemos apartamentos con servicios básicos como agua, luz, internet y limpieza ya incluidos en el contrato, asegurando una experiencia cómoda y sin complicaciones. <i class="fas fa-heart"></i>
                </p>
            </div>
            <div class="col-lg-3 col-md-6">
                <span class="service-icon rounded-circle mx-auto mb-3"><i class="icon-user"></i></span>
                <h4><strong>Asesoría personalizada</strong></h4>
                <p class="text-faded mb-0">Te ayudamos a encontrar el apartamento perfecto, ajustado a tu presupuesto y estilo de vida. Recibe recomendaciones basadas en tus preferencias y necesidades específicas.</p>
            </div>
        </div>
    </div>
</section>


<!-- Portfolio-->
<section class="content-section" id="portfolio">
    <div class="container px-4 px-lg-5">
        <div class="content-section-heading text-center">
            <h3 class="text-secondary mb-0">Portfolio</h3>
            <h2 class="mb-5">Nuestros Espacios Favoritos</h2>
        </div>
        <div class="row gx-0">
            <div class="col-lg-6">
                <a class="portfolio-item" href="#!">
                    <div class="caption">
                        <div class="caption-content">

                            <p class="mb-0">Santa Elena</p>

                        </div>
                    </div>
                    <img class="img-fluid" src="img/apt1.jfif" alt="..." />
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="#!">
                    <div class="caption">
                        <div class="caption-content">

                            <p class="mb-0">Baranquilla</p>

                        </div>
                    </div>
                    <img class="img-fluid" src="img/apt2.jfif" alt="..." />
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="#!">
                    <div class="caption">
                        <div class="caption-content">

                            <p class="mb-0">Cartagena</p>

                        </div>
                    </div>
                    <img class="img-fluid" src="img/apt3.jfif" alt="..." />
                </a>
            </div>
            <div class="col-lg-6">
                <a class="portfolio-item" href="#!">
                    <div class="caption">
                        <div class="caption-content">

                            <p class="mb-0">Medellin</p>

                        </div>
                    </div>
                    <img class="img-fluid" src="img/apt4.jfif" alt="..." />
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Botones de contacto-->
<section class="content-section bg-primary text-white">
    <div class="container px-4 px-lg-5 text-center">
        <h2 class="mb-4">Estamos comprometidos en brindarte todo el apoyo que te hace falta</h2>


<!-- Botón que abre el formulario -->
<button id="openFormBtn" class="open-button">Contáctanos</button>

<!-- El formulario emergente -->
<div class="form-popup" id="contactForm">
    <form method="post" action="enviarinfo.php" class="form-container">
        <span class="close-btn" id="closeFormBtn">&times;</span>
        <div class="form-header">
            <img src="img/telefono.png" alt="Teléfono" class="form-icon">
            <h2 class="form-title">Ingresa tu información, para ponernos en contacto</h2>
        </div>
        <label for="nombre"><b style="color: black;">nombre</b></label>
        <input type="text" placeholder="Ingresa tu nombre" name="nombre" required>

        <label for="id"><b style="color: black;">id</b></label>
        <input type="text" placeholder="Ingresa tu número de documento" name="id" required>

        <label for="correo"><b style="color: black;">correo</b></label>
        <input type="email" placeholder="Ingresa tu correo" name="correo" required>

        <label for="telefono"><b style="color: black;">telefono</b></label>
        <input type="text" placeholder="Ingresa tu telefono" name="telefono" required>

        <label for="apartamento"><b style="color: black;">apartamento</b></label>
        <input type="text" placeholder="Ingresa el apartamento de interés" name="apartamento" required>

        <button type="submit" class="btn">Enviar</button>
    </form>
</div>


<script src="menu/script.js"></script>
       
    </div>
</section>

<!-- Footer-->
<footer class="footer text-center">
    <div class="container px-4 px-lg-5">
        <ul class="list-inline mb-5">
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="https://www.instagram.com/instagram/ronald.pelaez"><i class="icon-social-instagram"></i></a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white" href="https://github.com/"><i class="icon-social-github"></i></a>
            </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Ronald Pelaez <br>creada con fines educativos<br>Ronaldpelaez201@gmail.com<br>3245638074</p>
    </div>
</footer>

</body>
</html>