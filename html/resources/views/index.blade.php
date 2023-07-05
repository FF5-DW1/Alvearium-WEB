<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alvearium</title>

    <link rel="stylesheet" href="{{ asset('home.css') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    <!-- navbar -->

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

    <!-- nav bar end-->

    {{-- hero --}}
    <section class="hero">
        <div class="hero-content">
            <div id="particles-js"></div>
            <img src="{{ asset('img/hombre_fondo_vr.png') }}" alt="Man" class="hidden">
            <div>
                <h1>Comienza una nueva experiencia</h1>
                <div class="buttonWrapper">
                    <a href="https://discord.com/invite/Kuc9H6Y5B4">Únete a Discord</a>
                    <a href="#">Consigue tu NFT</a>
                </div>
            </div>
            <div>
                <a href="https://www.linkedin.com/company/alveariumvr" class="socials" target="_blank">
                    <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                </a>
                <a href="https://twitter.com/alvearium__" target="_blank" class="socials">
                    <i class="fa-brands fa-twitter" style="color: #ffffff;"></i>
                </a>
                <a href="https://discord.com/invite/Kuc9H6Y5B4" target="_blank" class="socials">
                    <i class="fa-brands fa-discord" style="color: #ffffff;"></i>
                </a>
                <a href="https://www.instagram.com/alvearium_/" target="_blank" class="socials">
                    <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
                </a>
                <a href="https://www.facebook.com/people/Alvearium/100083367819508/" target="_blank" class="socials">
                    <i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- Hero end --}}


    <script src="{{ asset('navbar.js') }}"></script>
    <script src="https://kit.fontawesome.com/3342157087.js" crossorigin="anonymous"></script>
    <script src="lib/particles/particles.min.js"></script>
    <script src="lib/particles/app.js"></script>
    
</body>

</html>
