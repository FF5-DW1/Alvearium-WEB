<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/jpg" href="{{ asset('img/icons/favicon-Alvearium.png') }}">
    <title>Alvearium</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aboutUs.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/team.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('css/roadmap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partners.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>

    <!-- navbar -->

    <header class="main-header">


        <a href="#">
            <img class="main-logo" src="{{ asset('img/alvearium-logo.png') }}" alt="Logo">
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
                    <a href="https://discord.com/invite/Wmq2gzRRhf">Únete al Discord de <img
                            src="{{ asset('img/w3_white.png') }}" alt="Logo de LaunchW3"></a>
                    <a href="#">Información Tokenomics</a>
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
                        <img class="ImgInstitutions" src="{{ asset('img/instituciones2.png') }}" alt="Instituciones"
                            width="615px" height="405px">
                        <p>Instituciones Públicas</p>
                    </a>
                    <div id="ventanaModal1" class="modal">
                        <div class="contenido-modal">
                            <span class="cerrar">&times;</span>
                            <div class="modal-text">
                                <h2 class="about_text_1">Instituciones publicas</h2>
                                    <p class="about_text_2">Apoyan y promueven iniciativas que 
                                    ayudan a conservar el Patrimonio 
                                    Cultural, fomentan la dinamización social 
                                    y potencian la imagen de la ciudad para 
                                    atraer turismo e inversión<br>✓Ayuntamientos
                                    <br> ✓Asociaciones de conservación de 
                                    patrimonio
                                    </p>
                            </div>        
                        </div>
                    </div>
                </div>
                <div class="aboutComercial">
                    <a class="botonAbout abrirModal">
                        <img class="ImgComercial" src="{{ asset('img/comercios2.png') }}" alt="Comercial"
                            width="615px" height="405px">
                        <p>Comercios</p>
                    </a>
                    <div id="ventanaModal2" class="modal">
                        <div class="contenido-modal">
                            <span class="cerrar">&times;</span>
                            <div class="modal-text">
                                <h2 class="about_text_3">Comercios</h2>
                                <p class="about_text_4">Experimentan nuevas formas y canales 
                                    de venta. Tras años de digitalización y 
                                    de adopción del ecommerce , aparecen 
                                    nuevas maneras de vender con 
                                    experiencias inmersivas, tanto en tienda 
                                    como online
                                    <br>✓Tiendas <br>
                                    ✓Centros Comerciales
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aboutOcio">
                    <a class="botonAbout abrirModal">
                        <img class="ImgOcio" src="{{ asset('img/ocio2.png') }}" alt="Ocio" width="615px"
                            height="405px">
                        <p id="">Ocio</p>
                    </a>
                    <div id="ventanaModal3" class="modal">
                        <div class="contenido-modal">
                            <span class="cerrar">&times;</span>
                            <div class="modal-text">
                                <h2 class="about_text_5">Ocio</h2>
                                <p class="about_text_6">El Metaverso trae nuevas formas de 
                                    disfrutar del ocio desde cualquier lugar. 
                                    Los métodos de socializar a través de 
                                    dispositivos se verán mejorados gracias 
                                    al contenido inmersivo
                                    <br>✓Eventos deportivos
                                    <br>✓Conciertos
                                    <br>✓Cines inmersivos
                                </p>
                            </div>
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
                                <div class="modal-text">
                                    <h2 class="about_text_7">Creadores</h2>
                                    <p class="about_text_8">Necesitan nuevas formas 
                                        para mostrar su talento, posicionarse 
                                        en el mercado, monetizar su trabajo.
                                    <br>✓Influencers
                                    <br>✓Artistas
                                    <br>✓Profesores Online
                                    <br>✓Divulgadores científicos
                                    <br>✓Deportistas
                                    </p>
                                </div>
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
                                <div class="modal-text">    
                                    <h2 class="about_text_9">Marcas</h2>
                                    <p class="about_text_10">Exploran nuevos canales de 
                                        adquisición que les permitan mejorar el 
                                        engagement con su marca. Además, buscan 
                                        comunidades comprometidas con sus valores 
                                        y están dispuestos a apostar por conseguir su 
                                        misión con ellas.
                                    <br>✓ Grandes marcas entrando en el Metaverso.
                                    <br>✓ Personas reconocidas.
                                    </p>
                                </div>
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
                                <div class="modal-text">
                                    <h2 class="about_text_11">Usuarios</h2>
                                    <p class="about_text_12">Buscan experiencias inmersivas, 
                                        de calidad. Además quieren 
                                        beneficiarse de la generación de valor 
                                        de su identidad y actividad digital y 
                                        están comprometidos en generar 
                                        impacto positivo en el mundo.
                                    <br>✓Usuarios de Redes sociales.
                                    <br>✓Comunidad Crypto
                                    </p>
                                </div>
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
        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium dolore ipsum consectetur deserunt
            perspiciatis amet facilis consequatur quae? Omnis quod enim deleniti impedit sit rem obcaecati id numquam
            iusto eum.</div>

    </section>
    <!--end Frase-->

    <!-- Team -->
    <section class="team-direction_slider">
        <h2 class="title-section">Equipo <span class="title-section-second_color">Dirección</span></h2>
        <div class="contenedor">
            <div class="slider">
                <div class="item">
                    <img src="{{ asset('img/profile_pictures_direction/Alejandro_Ansodi.png') }}"
                        alt="Imagen de perfil equipo de dirección Alejandro Ansodi">
                    <div>
                        <h3 class="name_equip">Alejandro Ansodi</h3>
                        <h3 class="profile_equip">CDO (Diseño)</h3>
                    </div>

                </div>
                <div class="item">
                    <img src="{{ asset('img/profile_pictures_direction/Andres_Cosialls.png') }}"
                        alt="Imagen de perfil equipo de dirección Andrés Cosialls">
                    <div>
                        <h3 class="name_equip">Andrés Cosialls</h3>
                        <h3 class="profile_equip">Tecnología</h3>
                    </div>

                </div>
                <div class="item">
                    <img src="{{ asset('img/profile_pictures_direction/Pol_Echarri.png') }}"
                        alt="Imagen de perfil equipo de dirección Pol Echarri">
                    <div>
                        <h3 class="name_equip">Pol Echarri</h3>
                        <h3 class="profile_equip"> CTO (Talento) </h3>
                    </div>

                </div>
                <div class="item">
                    <img src="{{ asset('img/profile_pictures_direction/Luis_Manuel_Fernandez.png') }}"
                        alt="Imagen de perfil equipo de dirección Luis Manuel Fernández">
                    <div>
                        <h3 class="name_equip">Luis Manuel Fernández</h3>
                        <h3 class="profile_equip"> Director Ejecutivo</h3>
                    </div>

                </div>
                <div class="item">
                    <img src="{{ asset('img/profile_pictures_direction/Jose_M_Fernandez.png') }}"
                        alt="Imagen de perfil equipo de dirección José Miguel Fernández">
                    <div>
                        <h3 class="name_equip">José Miguel Fernández</h3>
                        <h3 class="profile_equip">CTO (Tecnología)</h3>
                    </div>


                </div>
                <div class="item">
                    <img src="{{ asset('img/profile_pictures_direction/Luis_Martin.png') }}"
                        alt="Imagen de perfil equipo de dirección Luis Martín">
                    <div>
                        <h3 class="name_equip">Luis Martín</h3>
                        <h3 class="profile_equip">CMO (Marketing)</h3>
                    </div>

                </div>
                <div class="item">
                    <img src="{{ asset('img/profile_pictures_direction/Oscar_Escallada.png') }}"
                        alt="Imagen de perfil equipo de dirección Oscar Escallada">
                    <div>
                        <h3 class="name_equip">Oscar Escallada</h3>
                        <h3 class="profile_equip"> CXO (Experiencia)</h3>
                    </div>

                </div>
                <div class="item">
                    <img src="{{ asset('img/profile_pictures_direction/Dimitri _Lobato.png') }}"
                        alt="Imagen de perfil equipo operacional Dimitri Lobato">
                    <div>
                        <h3 class="name_equip"> Dimitri Lobato</h3>
                        <h3 class="profile_equip">Innovación Blockchain</h3>
                    </div>

                </div>
                <button id="next"> > </button>
                <button id="prev">
                    < </button>
            </div>
        </div>

        <div class="buttonWrapper"> <a href="{{ route('quienes-somos') }}">Quiénes somos</a></div>
    </section>

    {{-- Portfolio --}}

    <section class="portfolio">
        <h2 class="portfolio_title_section">Portfolio</h2>
        <div class="portfolio_container_item">
            <div class="portfolio_item">
                <div class="portfolio_item_img">
                    <img src="https://picsum.photos/301/200" alt="">
                </div>
                <div class="portfolio_item_title">
                    <h3>Proyecto 1</h3>
                </div>
                <div class="portfolio_item_text">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta id exercitationem perferendis ab
                        dolor impedit minus eligendi, illum voluptatem alias deserunt debitis nostrum reprehenderit
                        ipsam in. Expedita iure molestias doloribus. <br><br>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus rem voluptate et blanditiis,
                        illum animi eius itaque eum debitis quis adipisci odio excepturi, quae fugiat facilis.
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
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta id exercitationem perferendis ab
                        dolor impedit minus eligendi, illum voluptatem alias deserunt debitis nostrum reprehenderit
                        ipsam in. Expedita iure molestias doloribus. <br><br>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus rem voluptate et blanditiis,
                        illum animi eius itaque eum debitis quis adipisci odio excepturi, quae fugiat facilis.
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
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta id exercitationem perferendis ab
                        dolor impedit minus eligendi, illum voluptatem alias deserunt debitis nostrum reprehenderit
                        ipsam in. Expedita iure molestias doloribus. <br><br>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus rem voluptate et blanditiis,
                        illum animi eius itaque eum debitis quis adipisci odio excepturi, quae fugiat facilis.
                    </p>
                </div>
            </div>
        </div>

    </section>

    <!--Roadmap-->
    <section class="roadmap_container">


        <h2 class="road_title">Roadmap</h2>


        <div class="road_container">
            
                <div class="phase_container">
                    <ul class="road_phase">
                        <div class="road_img_phase">
                            <img class="road_img_phase_img" src="/img/roadmap/roadmap_fondo.png" alt="Fase 1">
                            <p class="road_p fase1">F.I</p>
                            <h3>
                                2022 2023
                            </h3>
                        </div>
                    </ul>
                    
                    <ul class="road_phase">
                        <li class="road_img_phase">
                            <img class="road_img_phase_img" src="/img/roadmap/roadmap_fondo.png" alt="Fase 2">
                            <p class="road_p fase2">F.II</p>
                            <h3>
                                2022 2023
                            </h3>
                        </li>
                    </ul>
                    <ul class="road_phase">
                            <li class="road_img_phase">
                                <img class="road_img_phase_img" src="/img/roadmap/roadmap_fondo.png" alt="Fase 3">
                                <p class="road_p">F.III</p>
                                <h3>
                                    2022 2023
                                </h3>
                            </li>
                    </ul>
                </div>

                <div class="state_container">
                    <ul class="road_state">
                        <li class="road_img_state">
                            <img class="road_img_state_img" src="/img/roadmap/road_paisaje_luz.png" alt="Paisaje de la Luz">
                            <h3>
                                Paisaje de la Luz
                            </h3>
                        </li>
                    </ul>
                    
                                </ul>
                                <ul class="road_state">
                    <li class="road_img_state">
                        <img class="road_img_state_img" src="/img/roadmap/road_comercio.png" alt="Paisaje de la Luz">
                        <h3>
                            Madrid (Comercio, Ocio y Turismo)
                        </h3>
                    </li>
                                </ul>
                    
                                <ul class="road_state">
                    <li class="road_img_state">
                        <img class="road_img_state_img" src="/img/roadmap/escala_Co-Desarrollo_ciudad.png" alt="Paisaje de la Luz">
                        <h3>
                            Escala Co-Desarrollo ciudades TOP
                        </h3>
                    </li>
                                </ul>
                </div>

        </div>
    </section>

    

    {{-- Partners --}}

    <section class="partners">

        <h2 class="partners_title_section">Partners Estratégicos</h2>

        <div class="partners_container_item">

            <div class="partners_item">
                <img class="partner_img_1-1" src="{{ asset('img/partnersEstrategicos/1-1_PDL_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>

            <div class="partners_item">
                <img class="partner_img_1-2"
                    src="{{ asset('img/partnersEstrategicos/1-2_AyuntamientoMadrid_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_1-3" src="{{ asset('img/partnersEstrategicos/1-3_CC_vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_1-4"
                    src="{{ asset('img/partnersEstrategicos/1-4_Beaz_Bizkaia_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_2-1" src="{{ asset('img/partnersEstrategicos/2-1_CaixaDayOne_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_2-2"
                    src="{{ asset('img/partnersEstrategicos/2-2_PoliciaNacional_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_2-3" src="{{ asset('img/partnersEstrategicos/2-3_BBVA_vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_2-4" src="{{ asset('img/partnersEstrategicos/2-4_IBM_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_3-1" src="{{ asset('img/partnersEstrategicos/3-1_GrupoOneway_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_3-2" src="{{ asset('img/partnersEstrategicos/3-2_UberEats_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_3-3" src="{{ asset('img/partnersEstrategicos/3-3_Auren_vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_3-4"
                    src="{{ asset('img/partnersEstrategicos/3-4_MetaversoPro_vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_4-1" src="{{ asset('img/partnersEstrategicos/4-1_UTHub_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_4-2" src="{{ asset('img/partnersEstrategicos/4-2_MIG_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_4-3" src="{{ asset('img/partnersEstrategicos/4-3_MU_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_4-4" src="{{ asset('img/partnersEstrategicos/4-4_Butic_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_5-1" src="{{ asset('img/partnersEstrategicos/5-1_MagicFennec_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_5-2"
                    src="{{ asset('img/partnersEstrategicos/5-2_VRARAsociation_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_5-3" src="{{ asset('img/partnersEstrategicos/5-3_Integra_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_5-4" src="{{ asset('img/partnersEstrategicos/5-4_Deusens_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_6-1" src="{{ asset('img/partnersEstrategicos/6-1_LaunchW3_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_6-2" src="{{ asset('img/partnersEstrategicos/6-2_Owo_vector.svg') }}"
                    alt="logotipo de partner">
            </div>
            <div class="partners_item">
                <img class="partner_img_6-3" src="{{ asset('img/partnersEstrategicos/6-3_Comgo_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>

            <div class="partners_item">
                <img class="partner_img_6-4" src="{{ asset('img/partnersEstrategicos/6-4_RozzetAI_Vector.svg') }}"
                    alt="logotipo de partner">
            </div>
        </div>

    </section>

    <!--footer-->

    <footer class="footer_container">

        <div class="footer_contact">
            <div class="footer_frase">
                ¿Quieres estar al día de todas las novedades, o colaborar en el proyecto? Contacta con nosotros y síguenos en redes
            </div>
            <div class="footer_boton">
                <div class="buttonWrapper">
                    <a href="" class="abrirModal">Contacta con nosotros</a>
                    
                    
                </div>
            </div>
        </div>
        <div class="footer_final">
            <div class="footer_social">
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
            <div class="footer_privacidad">
                <p><a href="#">Conoce nuestra política de privacidad</a></p>
                <p><a href="#">Conoce nuestra receta de cookies 😊</a></p>
            </div>
            <div class="footer_derechos">
                Alvearium 2023 ®
            </div>
        </div>
    </footer>

    <a href="#"><img src="{{ asset('img/icons/icon-up-100.png') }}" alt="Icono ir cabecera página" class ="buttonUp"></a>

    <script src="{{ asset('navbar.js') }}"></script>
    <script src="https://kit.fontawesome.com/3342157087.js" crossorigin="anonymous"></script>
    <script src="{{ asset('lib/particles/particles.min.js') }}"></script>
    <script src="{{ asset('lib/particles/app.js') }}"></script>
    <script src="{{ asset('js/cards.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="{{ asset('js/buttonUp.js') }}"></script>

</body>

</html>
