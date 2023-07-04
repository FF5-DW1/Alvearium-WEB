<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('home.css') }}" />
</head>

<body>
    <header class="main-header">
    

        <a href="#">
            <img class="main-logo" src="img/alvearium-logo.png" alt="Logo">
        </a>
        <nav id="nav" class="main-nav">
            <div class="nav-links">
                <a class="link-item" href="#">Visión</a>
                <a class="link-item" href="#">Fundación</a>
                <a class="link-item" href="#">Equipo & Partners</a>
                <a class="link-item" href="#">Roadmap</a>
            </div>
        </nav>
        
        <button id="button-menu" class="button-menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    
        
        
    </header>
    
    <section class="aboutUsContainer">
        <div class="aboutUsTitulo">
            <h2>Conoce más sobre Alvearium</h2>
        </div>
        <div class="aboutUsMedia">

            <div class="aboutUsVideo">
                <iframe width="430" height="315" src="https://www.youtube-nocookie.com/embed/usOFzrD8a2E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="aboutUsCarrusel">
                <h3>Perfiles</h3>
            </div>
        </div>
    </section>



    <script src="{{ asset('navbar.js') }}"></script>
</body>

</html>
