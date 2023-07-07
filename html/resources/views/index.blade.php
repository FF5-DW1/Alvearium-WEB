<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alvearium</title>

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aboutUs.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/team.css') }}">
</head>

<body>

    <!-- navbar -->

    <header class="main-header">


        <a href="#">
            <img class="main-logo" src="{{asset('img/alvearium-logo.png')}}" alt="Logo">
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
    <!-- nav bar end-->

    <!-- Hero -->
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

    <!-- Hero end -->

    <!-- Section Us -->

    <section class="aboutUsContainer">
        <div class="aboutUsTitulo">
            <h2>Conoce más sobre Alvearium</h2>
        </div>
        <div class="aboutUsMedia">

            <div class="aboutUsVideo">
                <iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/usOFzrD8a2E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen ></iframe>
            </div>
            <div class="aboutUsPerfil">

                <div class="aboutInstitutions">
                    
                    <img class="ImgInstitutions" src="{{asset('img/instituciones1.png')}}" alt="Instituciones" width="615px" height="405px">
                    <p>
                        Instituciones Públicas
                    </p>
                </div>
                <div class="aboutInstitutions">
                    
                    <img class="ImgComercial" src="{{asset('img/comercios1.png')}}" alt="Comercial" width="615px" height="405px">
                    <p>
                        Comercios
                    </p>
                </div>
                <div class="aboutInstitutions">
                    
                    
                    <img class="ImgOcio" src="{{asset('img/ocio1.png')}}" alt="Ocio" width="615px" height="405px">
                    <p id="">
                        Ocio
                    </p>
                </div>
                <div class="perfiles">
                    <div class="aboutInstitutions">
                    
                        <img class="ImgCreate" src="{{asset('img/creadores.png')}}" alt="Creadores" width="615px" height="405px">
                        <p>
                            Creadores
                        </p>
                    </div>
                    <div class="aboutInstitutions">
                    
                        <img class="ImgBrands" src="{{asset('img/marcas.png')}}" alt="Marcas" width="615px" height="405px">
                        <p>
                            Marcas
                        </p>
                    </div>
                    <div class="aboutInstitutions">
                    
                        <img class="ImgUsers" src="{{asset('img/usuarios.png')}}" alt="Usuarios" width="615px" height="405px">
                        <p>
                            Usuarios
                        </p>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>

    <!-- Team -->
    <section class="team-direction_slider">
        <h2 class="tittle-section">Equipo <span class="tittle-section-second_color">Dirección</span></h2>
        <div class="contenedor">
            <div class="slider">
                <div class="item">
                    <img src="img/profile_pictures_direction/alvearium-team-alejandro-1.png" alt="Imagen de perfil equipo de dirección Alejandro Ansodi">
                    <div>
                        <h3 class="name_equip">Alejandro Ansodi</h3>
                        <h3 class="profile_equip">CDO (Design)</h3>
                    </div>

                </div>
                <div class="item">
                    <img src="img/profile_pictures_direction/alvearium-team-Diana.png" alt="Imagen de perfil equipo de dirección Diana Baldero">
                    <div>
                        <h3 class="name_equip">Diana Baldero</h3>
                        <h3 class="profile_equip"> CFO </h3>
                    </div>

                </div>
                <div class="item">
                    <img src="img/profile_pictures_direction/alvearium-team-pol-1.png" alt="Imagen de perfil equipo de dirección Pol Echarri">
                    <div>
                        <h3 class="name_equip">Pol Echarri</h3>
                        <h3 class="profile_equip"> CTO (Talent) </h3>
                    </div>

                </div>
                <div class="item">
                    <img src="img/profile_pictures_direction/alvearium-team-luis-manuel-1.png" alt="Imagen de perfil equipo de dirección Luis Manuel Fernández">
                    <div>
                        <h3 class="name_equip">Luis Manuel Fernández</h3>
                        <h3 class="profile_equip"> CEO</h3>
                    </div>

                </div>
                <div class="item">
                    <img src="img/profile_pictures_direction/alvearium-team-jose-miguel-1.png" alt="Imagen de perfil equipo de dirección José Miguel Fernández">
                    <div>
                        <h3 class="name_equip">José Miguel Fernández</h3>
                        <h3 class="profile_equip">CTO (Tech)</h3>
                    </div>


                </div>
                <div class="item">
                    <img src="img/profile_pictures_direction/alvearium-team-luis-1.png" alt="Imagen de perfil equipo de dirección Luis Martín">
                    <div>
                        <h3 class="name_equip">Luis Martín</h3>
                        <h3 class="profile_equip">CMO (Marketing)</h3>
                    </div>

                </div>
                <div class="item">
                    <img src="img/profile_pictures_direction/alvearium-team-oscar-1.png" alt="Imagen de perfil equipo de dirección Oscar Escallada">
                    <div>
                        <h3 class="name_equip">Oscar Escallada</h3>
                        <h3 class="profile_equip"> CXO (Experience)</h3>
                    </div>

                </div>
                <button id="next"> > </button>
                <button id="prev">
                    < </button>
            </div>
        </div>
    </section>

    <script src="{{ asset('navbar.js') }}"></script>
    <script src="https://kit.fontawesome.com/3342157087.js" crossorigin="anonymous"></script>
    <script src="lib/particles/particles.min.js"></script>
    <script src="lib/particles/app.js"></script>
    <script src="js/cards.js"></script>
</body>

</html>