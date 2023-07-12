<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/jpg" href="{{ asset('img/favicon-Alvearium.png') }}">
    <title>Alvearium</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quienesSomos.css') }}">


</head>

<body>
    <section class="quienesSomos">
        <div class="hero">
            <div class="hero-content">
                <div id="particles-js"></div>
                <img src="{{ asset('img/hombre_fondo_vr.png') }}" alt="Man" class="hidden">
                <div>
                    <h1 class="hero-title_layer">Comienza una nueva experiencia</h1>
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
                    <a href="https://www.facebook.com/people/Alvearium/100083367819508/" target="_blank"
                        class="socials">
                        <i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="container_pestañas">

            <h2 class="quienesSomos_title_section">QUIENES SOMOS</h2>

            <div class="tabs">
                <div class="tab-container">
                    <div id="tab3" class="tab">
                        <a href="#tab3">HISTORIA</a>
                        <div class="tab-content">
                            <h2>Titulo 3</h2>
                            <p>Lorem ipsum ...</p>
                        </div>
                    </div>
                    <div id="tab2" class="tab">
                        <a href="#tab2">EQUIPO</a>
                        <div class="tab-content">
                            <h2>Titulo 2</h2>
                            <p>Lorem ipsum ...</p>
                        </div>
                    </div>
                    <div id="tab1" class="tab">
                        <a href="#tab1">CONOCENOS</a>
                        <div class="tab-content">

                            <p class="tab1_parrafo"><span class="destacarPalabraParrafo">Alvearium</span> es una red
                                social descentralizada en Web3, con espacios virtuales inspirados en ciudades reales,
                                donde los usuarios, gracias a tecnologías inmersivas, un ecosistema tokenizado y las
                                recompensas por consumir contenido en la plataforma, creará un Metaverso que genere
                                impacto positivo en el mundo real</p>

                            <br>

                            <p class="tab1_parrafo">Se posiciona como la primera Plataforma Web3 que replica ciudades
                                reales en el Metaverso con el propósito de generar impacto socio-económico en el mundo
                                real</p>

                            <br><br>
                            <hr>

                            <div class="tab1_columnas">
                                <div class="tab1_columnas-left">

                                    <h2 class="tab1_title_columna">Nuestra Misión</h2>

                                    <p class="tab1_parrafo">Acercar a la población las tecnologías avanzadas y
                                        descentralizadas, con el objetivo de <span class="resaltarText">mejorar la
                                            experiencia y la forma de relacionarnos entre nosotros y con nuestro
                                            entorno.</span></p>

                                </div>

                                <div class="tab1_columnas-right">

                                    <h2 class="tab1_title_columna">Nuestra Visión</h2>

                                    <p class="tab1_parrafo"><span class="resaltarText">La comunidad de Alvearium</span>,
                                        a través del empleo de las tecnologías más disruptivas, <span
                                            class="resaltarText">liderará la humanización del metaverso</span>.
                                        <br><br>
                                        Los seres humanos podremos reproducir experiencias sensoriales más allá del
                                        espacio-tiempo que nos permitirán mejorar nuestra forma de vivir y de
                                        relacionarnos.
                                    </p>

                                </div>


                            </div>

                            <div class="tab1_nuestrosValores">

                                <h2 class="tab1_title_columna title-valores">Nuestros Valores</h2>

                                <div class="tab1_nuestrosValores-item">

                                    <div class="row">
                                        <div class="valor-text">Excelencia</div>
                                        <div class="valor-text">Resiliencia</div>
                                    </div>
                                    <div class="row">
                                        <div class="valor-text">Innovación</div>
                                        <div class="valor-text">Trabajo<br> en<br> equipo</div>
                                        <div class="valor-text">Motivación</div>
                                    </div>
                                    <div class="row">
                                        <div class="valor-text">Comunidad</div>
                                        <div class="valor-text">Ética</div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/3342157087.js" crossorigin="anonymous"></script>
    <script src="{{ asset('lib/particles/particles.min.js') }}"></script>
    <script src="{{ asset('lib/particles/app.js') }}"></script>

</body>

</html>
