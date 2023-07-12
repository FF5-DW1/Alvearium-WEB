<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/jpg" href="{{ asset('img/favicon-Alvearium.png') }}">
    <title>Alvearium</title>

    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aboutUs.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/team.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partners.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
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
                <h1 class="hero-title_layer">Comienza una nueva experiencia</h1>
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
                <iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/usOFzrD8a2E"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="aboutUsPerfil">
                <div class="aboutInstitutions">
                    <a class="botonAbout abrirModal">
                        <img class="ImgInstitutions" src="{{ asset('img/instituciones1.png') }}" alt="Instituciones"
                            width="615px" height="405px">
                        <p>Instituciones Públicas</p>
                    </a>
                    <div id="ventanaModal1" class="modal">
                        <div class="contenido-modal">
                            <span class="cerrar">&times;</span>
                            <h2>Ventana modal</h2>
                            <p>Esto es el texto de la ventana</p>
                        </div>
                    </div>
                </div>
                <div class="aboutComercial">
                    <a class="botonAbout abrirModal">
                        <img class="ImgComercial" src="{{ asset('img/comercios1.png') }}" alt="Comercial"
                            width="615px" height="405px">
                        <p>Comercios</p>
                    </a>
                    <div id="ventanaModal2" class="modal">
                        <div class="contenido-modal">
                            <span class="cerrar">&times;</span>
                            <h2>Ventana modal</h2>
                            <p>Esto es el texto de la ventana</p>
                        </div>
                    </div>
                </div>
                <div class="aboutOcio">
                    <a class="botonAbout abrirModal">
                        <img class="ImgOcio" src="{{ asset('img/ocio1.png') }}" alt="Ocio" width="615px"
                            height="405px">
                        <p id="">Ocio</p>
                    </a>
                    <div id="ventanaModal3" class="modal">
                        <div class="contenido-modal">
                            <span class="cerrar">&times;</span>
                            <h2>Ventana modal</h2>
                            <p>Esto es el texto de la ventana</p>
                        </div>
                    </div>
                </div>
                <div class="perfiles">
                    <div class="aboutCreate">
                        <a class="botonAbout abrirModal">
                            <img class="ImgCreate" src="{{ asset('img/creadores.png') }}" alt="Creadores"
                                width="615px" height="405px">
                            <p>Creadores</p>
                        </a>
                        <div id="ventanaModal4" class="modal">
                            <div class="contenido-modal">
                                <span class="cerrar">&times;</span>
                                <h2>Ventana modal</h2>
                                <p>Esto es el texto de la ventana</p>
                            </div>
                        </div>
                    </div>

                    <div class="aboutBrands">
                        <a class="botonAbout abrirModal">
                            <img class="ImgBrands" src="{{ asset('img/marcas.png') }}" alt="Marcas"
                                width="615px" height="405px">
                            <p>Marcas</p>
                        </a>
                        <div id="ventanaModal5" class="modal">
                            <div class="contenido-modal">
                                <span class="cerrar">&times;</span>
                                <h2>Ventana modal</h2>
                                <p>Esto es el texto de la ventana</p>
                            </div>
                        </div>
                    </div>
                    <div class="aboutUsers">
                        <a class="botonAbout abrirModal">
                            <img class="ImgUsers" src="{{ asset('img/usuarios.png') }}" alt="Usuarios"
                                width="615px" height="405px">
                            <p>Usuarios</p>
                        </a>
                        <div id="ventanaModal6" class="modal">
                            <div class="contenido-modal">
                                <span class="cerrar">&times;</span>
                                <h2>Ventana modal</h2>
                                <p>Esto es el texto de la ventana</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        </div>
    </section>

    <!-- Frase -->

    <section class="frase">
        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium dolore ipsum consectetur deserunt perspiciatis amet facilis consequatur quae? Omnis quod enim deleniti impedit sit rem obcaecati id numquam iusto eum.</div>
        
    </section>
    <!--end Frase-->

    <!-- Team -->
    <section class="team-direction_slider">
        <h2 class="title-section">Equipo <span class="title-section-second_color">Dirección</span></h2>
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

        <button class="button_aboutUs">Quienes somos +</button>
    </section>

    {{-- Portfolio --}}

    <section class="portfolio">
        <h2 class="portfolio_title_section">PORTFOLIO</h2>
        <div class="portfolio_container_item">
            <div class="portfolio_item">
                <div class="portfolio_item_img">
                    <img src="https://picsum.photos/301/200" alt="">
                </div>
                <div class="portfolio_item_title">
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
                <div class="portfolio_item_title">
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
                    <img src="https://picsum.photos/299/200" alt="">
                </div>
                <div class="portfolio_item_title">
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

        <h2 class="partners_title_section">PARTNERS ESTRATEGICOS</h2>

        <div class="partners_container_item">

            <div class="partners_item">
                <img class="partnert_img_1" src="{{ asset('img/partnersEstrategicos/1._paisajeDeLaLuz.png') }}" alt="logotipo de partner">
            </div>
            
            <div class="partners_item">
                <img class="partnert_img_2" src="{{ asset('img/partnersEstrategicos/2._AyuntamientoMadrid.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_3" src="{{ asset('img/partnersEstrategicos/3._CamaraMadrid.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_4" src="{{ asset('img/partnersEstrategicos/4._BizkaiaBeaz.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_5" src="{{ asset('img/partnersEstrategicos/5._CaixaDayone.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_6" src="{{ asset('img/partnersEstrategicos/6._PoliciaNacional.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_7" src="{{ asset('img/partnersEstrategicos/7._BBVA.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_8" src="{{ asset('img/partnersEstrategicos/8._IBM.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_9" src="{{ asset('img/partnersEstrategicos/9._Oneway.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_10" src="{{ asset('img/partnersEstrategicos/10._UberEats.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_11" src="{{ asset('img/partnersEstrategicos/11._Auren.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_12" src="{{ asset('img/partnersEstrategicos/12._MetaVersoPro.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_13" src="{{ asset('img/partnersEstrategicos/13._UtHub.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_14" src="{{ asset('img/partnersEstrategicos/14._MadridInGame.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_15" src="{{ asset('img/partnersEstrategicos/15._MondragonUnibertsitatea.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_16" src="{{ asset('img/partnersEstrategicos/16._ButicTheNewSchool.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_17" src="{{ asset('img/partnersEstrategicos/17._MagicFennec.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_18" src="{{ asset('img/partnersEstrategicos/18._VrArAssociation.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_19" src="{{ asset('img/partnersEstrategicos/19._Integra.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_20" src="{{ asset('img/partnersEstrategicos/20._DeuSens.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_21" src="{{ asset('img/partnersEstrategicos/21._W3.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_22" src="{{ asset('img/partnersEstrategicos/22._OWO.png') }}" alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partnert_img_23" src="{{ asset('img/partnersEstrategicos/23._Comgo.png') }}" alt="logotipo de partner">
            </div>
            
            <div class="partners_item">
                <img class="partnert_img_24" src="{{ asset('img/partnersEstrategicos/24._RozettAi.png') }}" alt="logotipo de partner">
            </div>
        </div>

    </section>

    <script src="{{ asset('navbar.js') }}"></script>
    <script src="https://kit.fontawesome.com/3342157087.js" crossorigin="anonymous"></script>
    <script src="lib/particles/particles.min.js"></script>
    <script src="lib/particles/app.js"></script>
    <script src="js/cards.js"></script>
    <script src="js/modal.js"></script>
</body>

</html>