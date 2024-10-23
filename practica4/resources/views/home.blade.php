<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Página Web de Programación</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .header {
            height: 60vh;
            background: url('{{ asset('img/header.jpg') }}') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        
        .price {
            background: url('{{ asset('img/COSTOS.jpg') }}') no-repeat center center/cover;
            padding: 50px 0;
            color: #ffffff;
        }
        </style>
        
</head>
<body>
    <div class="head">
        <div class="logo">
            <a href="#">Mi Logo</a>
        </div>
        <nav class="navbar">
            <a href="#">Inicio</a>           
            <a href="#">Programación</a>           
            <a href="#">Proyectos</a>           
            <a href="#">Contactos</a>           
            <a href="#">Sobre Nosotros</a>           
        </nav>
    </div>

    <header class="header">
        <h2 class="title">Bienvenido a Mi Página</h2>
        <p>Descubre mis proyectos y habilidades en programación.</p>
        <div class="btn-home">
            <a href="#" class="btn">Saber más</a>
            <a href="#" class="btn">Contactar</a>
        </div>
    </header>

    <section class="content sau">
        <h2 class="title">Mis Proyectos</h2>
        <p>Estos son algunos de los proyectos en los que he trabajado.</p>
        <div class="box-container">
            <div class="box">
                <i class="fab fa-angular"></i>
                <h3>Proyecto Angular</h3>
                <p>Descripción breve del proyecto Angular.</p>
            </div>
            <div class="box">
                <i class="fab fa-apple"></i>
                <h3>Proyecto iOS</h3>
                <p>Descripción breve del proyecto iOS.</p>
            </div>
            <div class="box">
                <i class="fab fa-android"></i>
                <h3>Proyecto Android</h3>
                <p>Descripción breve del proyecto Android.</p>
            </div>
        </div>
    </section>

    <section class="content about">
        <h2 class="title">Sobre Nosotros</h2>
        <p>Conoce más sobre mi experiencia y habilidades en programación.</p>
        <a href="#" class="btn">Saber más</a>
    </section>

    <section class="content price">
        <article class="contain">
            <h2 class="precio">Precios de Servicios</h2>
            <p>Consulta nuestros precios para distintos servicios de programación.</p>
            <a href="#" class="btn">Ver precios</a>
        </article>
    </section>

    <section class="content contact">
        <h2 class="title">Contacto</h2>
        <p>Teléfono: 871249131747239817</p>
        <figure class="map">
            <img src="{{ asset('img/mapa.jpg') }}" height="220px" width="100%" alt="Mapa">
        </figure>
    </section>

    <footer>
        <p>&copy; 2024 Mi Página Web. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
