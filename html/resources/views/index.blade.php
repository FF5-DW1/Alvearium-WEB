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
                <iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/usOFzrD8a2E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="aboutUsPerfil">
                
                
                <div class="aboutInstitutions">
                    <p>
                        Instituciones Públicas
                    </p>
                    <img class="aboutImgInstitutions" src="{{asset('img/instituciones1.png')}}" alt="">
                </div>
                <div class="aboutInstitutions">
                    <p>
                        Comercios
                    </p>
                    <img class="aboutImgComercial" src="{{asset('img/comercios1.png')}}" alt="">
                </div>
                <div class="aboutInstitutions">
                    <p>
                        Ocio
                    </p>
                    <img class="aboutImgOcio" src="{{asset('img/ocio1.png')}}" alt="">
                </div>
                <div class="aboutInstitutions">
                    <p>
                        Creadores
                    </p>
                    <img class="aboutImgCreate" src="{{asset('img/creadores.png')}}" alt="">
                </div>
                <div class="aboutInstitutions">
                    <p>
                        Marcas
                    </p>
                    <img class="aboutImgBrands" src="{{asset('img/marcas.png')}}" alt="">
                </div>
                <div class="aboutInstitutions">
                    <p>
                        Usuarios
                    </p>
                    <img class="aboutImgUsers" src="{{asset('img/usuarios.png')}}" alt="">
                </div>
                
                
            </div>
        </div>
    </section>



    <script src="{{ asset('navbar.js') }}"></script>
</body>

</html>
