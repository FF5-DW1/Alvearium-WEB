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
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partners.css') }}">
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

    <!-- Team -->
    <section class="team-direction_slider">
        <h2 class="tittle-section">Equipo <span class="tittle-section-second_color">Dirección</span></h2>
        <div class="contenedor">
            <div class="slider">
                <div class="item">
                    <img src="{{ asset('img/profile_pictures_direction/alvearium-team-alejandro-1.png') }}" alt="Imagen de perfil equipo de dirección Alejandro Ansodi">
                    <div>
                        <h3 class="name_equip">Alejandro Ansodi</h3>
                        <h3 class="profile_equip">CDO (Design)</h3>
                    </div>

                </div>
                <div class="item">
                    <img src="{{ asset('img/profile_pictures_direction/alvearium-team-Diana.png') }}" alt="Imagen de perfil equipo de dirección Diana Baldero">
                    <div>
                        <h3 class="name_equip">Diana Baldero</h3>
                        <h3 class="profile_equip"> CFO </h3>
                    </div>

                </div>
                <div class="item">
                    <img src="{{ asset('img/profile_pictures_direction/alvearium-team-pol-1.png') }}" alt="Imagen de perfil equipo de dirección Pol Echarri">
                    <div>
                        <h3 class="name_equip">Pol Echarri</h3>
                        <h3 class="profile_equip"> CTO (Talent) </h3>
                    </div>

                </div>
                <div class="item">
                    <img src="{{ asset('img/profile_pictures_direction/alvearium-team-luis-manuel-1.png') }}" alt="Imagen de perfil equipo de dirección Luis Manuel Fernández">
                    <div>
                        <h3 class="name_equip">Luis Manuel Fernández</h3>
                        <h3 class="profile_equip"> CEO</h3>
                    </div>

                </div>
                <div class="item">
                    <img src="{{ asset('img/profile_pictures_direction/alvearium-team-jose-miguel-1.png') }}" alt="Imagen de perfil equipo de dirección José Miguel Fernández">
                    <div>
                        <h3 class="name_equip">José Miguel Fernández</h3>
                        <h3 class="profile_equip">CTO (Tech)</h3>
                    </div>


                </div>
                <div class="item">
                    <img src="{{ asset('img/profile_pictures_direction/alvearium-team-luis-1.png') }}" alt="Imagen de perfil equipo de dirección Luis Martín">
                    <div>
                        <h3 class="name_equip">Luis Martín</h3>
                        <h3 class="profile_equip">CMO (Marketing)</h3>
                    </div>

                </div>
                <div class="item">
                    <img src="{{ asset('img/profile_pictures_direction/alvearium-team-oscar-1.png') }}" alt="Imagen de perfil equipo de dirección Oscar Escallada">
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

    {{-- Portfolio --}}

    <section class="portfolio">
        <h2 class="portfolio_tittle_section">PORTFOLIO</h2>
        <div class="portfolio_container_item">
            <div class="portfolio_item">
                <div class="portfolio_item_img">
                    <img src="https://picsum.photos/300/200" alt="">
                </div>
                <div class="portfolio_item_tittle">
                    <h3>Proyecto 1</h3>
                </div>
                <div class="portfolio_item_text">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta id exercitationem perferendis ab dolor impedit minus eligendi, illum voluptatem alias deserunt debitis nostrum reprehenderit ipsam in. Expedita iure molestias doloribus. <br><br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus rem voluptate et blanditiis, illum animi eius itaque eum debitis quis adipisci odio excepturi, quae fugiat facilis. 
                    </p>
                </div>
            </div>
            <div class="portfolio_item">
                <div class="portfolio_item_img">
                    <img src="https://picsum.photos/300/200" alt="">
                </div>
                <div class="portfolio_item_tittle">
                    <h3>Proyecto 1</h3>
                </div>
                <div class="portfolio_item_text">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta id exercitationem perferendis ab dolor impedit minus eligendi, illum voluptatem alias deserunt debitis nostrum reprehenderit ipsam in. Expedita iure molestias doloribus. <br><br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus rem voluptate et blanditiis, illum animi eius itaque eum debitis quis adipisci odio excepturi, quae fugiat facilis. 
                        </p>
                </div>
            </div>
            <div class="portfolio_item">
                <div class="portfolio_item_img">
                    <img src="https://picsum.photos/300/200" alt="">
                </div>
                <div class="portfolio_item_tittle">
                    <h3>Proyecto 1</h3>
                </div>
                <div class="portfolio_item_text">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta id exercitationem perferendis ab dolor impedit minus eligendi, illum voluptatem alias deserunt debitis nostrum reprehenderit ipsam in. Expedita iure molestias doloribus. <br><br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus rem voluptate et blanditiis, illum animi eius itaque eum debitis quis adipisci odio excepturi, quae fugiat facilis. 
                    </p>
                </div>
            </div>
        </div>

    </section>

    {{-- Partners --}}

    <section class="partners">

        <h2 class="partners_tittle_section">PARTNERS ESTRATEGICOS</h2>

        <div class="partners_container_item">

            <div class="partners_item">
                <img class="partner_img_1-1" src="{{ asset('img/partnersEstrategicos/1-1_PDL_Vector.svg') }}" alt="logotipo de partner">
            </div>
            
            <div class="partners_item">
                <img class="partner_img_1-2" src="{{ asset('img/partnersEstrategicos/1-2_AyuntamientoMadrid_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_1-3" src="{{ asset('img/partnersEstrategicos/1-3_CC_vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_1-4" src="{{ asset('img/partnersEstrategicos/1-4_Beaz_Bizkaia_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_2-1" src="{{ asset('img/partnersEstrategicos/2-1_CaixaDayOne_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_2-2" src="{{ asset('img/partnersEstrategicos/2-2_PoliciaNacional_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_2-3" src="{{ asset('img/partnersEstrategicos/2-3_BBVA_vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_2-4" src="{{ asset('img/partnersEstrategicos/2-4_IBM_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_3-1" src="{{ asset('img/partnersEstrategicos/3-1_GrupoOneway_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_3-2" src="{{ asset('img/partnersEstrategicos/3-2_UberEats_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_3-3" src="{{ asset('img/partnersEstrategicos/3-3_Auren_vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_3-4" src="{{ asset('img/partnersEstrategicos/3-4_MetaversoPro_vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_4-1" src="{{ asset('img/partnersEstrategicos/4-1_UTHub_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_4-2" src="{{ asset('img/partnersEstrategicos/4-2_MIG_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_4-3" src="{{ asset('img/partnersEstrategicos/4-3_MU_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_4-4" src="{{ asset('img/partnersEstrategicos/4-4_Butic_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_5-1" src="{{ asset('img/partnersEstrategicos/5-1_MagicFennec_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_5-2" src="{{ asset('img/partnersEstrategicos/5-2_VRARAsociation_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_5-3" src="{{ asset('img/partnersEstrategicos/5-3_Integra_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_5-4" src="{{ asset('img/partnersEstrategicos/5-4_Deusens_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_6-1" src="{{ asset('img/partnersEstrategicos/6-1_LaunchW3_Vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_6-2" src="{{ asset('img/partnersEstrategicos/6-2_Owo_vector.svg') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_6-3" src="{{ asset('img/partnersEstrategicos/6-3_Comgo_Vector.svg') }}" alt="logotipo de partner">
            </div>
            
            <div class="partners_item">
                <img class="partner_img_6-4" src="{{ asset('img/partnersEstrategicos/6-4_RozzetAI_Vector.svg') }}" alt="logotipo de partner">
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