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



            <h2 class="quienesSomos_title_section">Quiénes somos</h2>




            <div class="tabs">
                <a href="{{ route('home') }}"><img src="{{ asset('img/icons/icon-return-80-.png') }}"
                        alt="Icono regresar pantalla principal" class="icon-return"></a>
                <div class="tab-container">
                    <div id="tab3" class="tab">
                        <a href="#tab3">HISTORIA</a>
                        <div class="tab-content">
                            <h2>NUESTRA HISTORIA:</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe ipsum, dolores temporibus
                                iusto pariatur odio totam? Inventore accusantium natus nostrum corrupti aspernatur
                                obcaecati debitis. Aliquam fugit accusantium ipsa recusandae architecto.
                                Placeat fuga vero aliquid, accusamus nemo deserunt eius, dolore minima rem quis, vitae
                                earum iusto. Distinctio necessitatibus repudiandae voluptate consectetur, non modi odit
                                laborum officia ipsum doloribus qui? Maxime, asperiores.
                                Minima fugit exercitationem temporibus inventore reprehenderit suscipit provident
                                consequuntur. Nobis ipsa eum reiciendis, fugit nihil earum hic. Sed, repellendus cum
                                iste praesentium necessitatibus quo, corporis officiis ad ex consectetur laboriosam?
                                Veniam consectetur dolorem reiciendis optio vero dolore recusandae eos, sapiente tempora
                                ratione esse officia placeat unde similique eius dolor suscipit. Qui ad ut officia atque
                                nihil voluptatum enim aliquam sit.</p>
                        </div>
                    </div>
                    <div id="tab2" class="tab">
                        <a href="#tab2">EQUIPO</a>
                        <div class="tab-content">

                            <div class="team-direction">
                                <h2 class="title-section">Equipo <span
                                        class="title-section-second_color">Dirección</span></h2>
                                <div class="team-direction-item">
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_direction/Luis_Manuel_Fernandez.png') }}"
                                            alt="Imagen de perfil equipo de dirección Luis Manuel Fernández">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">Luis Manuel Fernández</h3>
                                            <h3 class="profile_equip"> CEO</h3>
                                            <a href="https://www.linkedin.com/company/alveariumvr" class="socials"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_direction/Pol_Echarri.png') }}"
                                            alt="Imagen de perfil equipo de dirección Pol Echarri">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">Pol Echarri</h3>
                                            <h3 class="profile_equip"> CTO (Talent) </h3>
                                            <a href="https://www.linkedin.com/company/alveariumvr" class="socials"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_direction/Jose_M_Fernandez.png') }}"
                                            alt="Imagen de perfil equipo de dirección José Miguel Fernández">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">José Miguel Fernández</h3>
                                            <h3 class="profile_equip">CTO (Tech)</h3>
                                            <a href="https://www.linkedin.com/company/alveariumvr" class="socials"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                            </a>
                                        </div>


                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_direction/Alejandro_Ansodi.png') }}"
                                            alt="Imagen de perfil equipo de dirección Alejandro Ansodi">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">Alejandro Ansodi</h3>
                                            <h3 class="profile_equip">CDO (Design)</h3>
                                            <a href="https://www.linkedin.com/company/alveariumvr" class="socials"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_direction/Luis_Martin.png') }}"
                                            alt="Imagen de perfil equipo de dirección Luis Martín">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">Luis Martín</h3>
                                            <h3 class="profile_equip">CMO (Marketing)</h3>
                                            <a href="https://www.linkedin.com/company/alveariumvr" class="socials"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_direction/Oscar_Escallada.png') }}"
                                            alt="Imagen de perfil equipo de dirección Oscar Escallada">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">Oscar Escallada</h3>
                                            <h3 class="profile_equip"> CXO (Experience)</h3>
                                            <a href="https://www.linkedin.com/company/alveariumvr" class="socials"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_direction/Andres_Cosialls.png') }}"
                                            alt="Imagen de perfil equipo de dirección Diana Baldero">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">Andrés Cosialls</h3>
                                            <h3 class="profile_equip">Tech</h3>
                                            <a href="https://www.linkedin.com/company/alveariumvr" class="socials"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="team-operational">
                                <h2 class="title-section">Equipo <span
                                        class="title-section-second_color">Operacional</span></h2>
                                <div class="team-operational-item">
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_operational/Alfonso_Casanova.png') }}"
                                            alt="Imagen de perfil equipo operacional Alfonso Casanova">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">Alfonso Casanova</h3>
                                            <h3 class="profile_equip">Developer</h3>
                                            <a href="https://www.linkedin.com/company/alveariumvr" class="socials"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_operational/Dimitri _Lobato.png') }}"
                                            alt="Imagen de perfil equipo operacional Dimitri Lobato">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">Dimitri Lobato</h3>
                                            <h3 class="profile_equip">Blockchain Innovation</h3>
                                            <a href="https://www.linkedin.com/company/alveariumvr" class="socials"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_operational/Gonzalo_Laborda.png') }}"
                                            alt="Imagen de perfil equipo operacional Gonzalo Laborda">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">Gonzalo Laborda</h3>
                                            <h3 class="profile_equip">Researche</h3>
                                            <a href="https://www.linkedin.com/company/alveariumvr" class="socials"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_operational/Ines_Navarro.png') }}"
                                            alt="Imagen de perfil equipo operacional Inés Navarro">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">Inés Navarro</h3>
                                            <h3 class="profile_equip">Finance</h3>
                                            <a href="https://www.linkedin.com/company/alveariumvr" class="socials"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_operational/Nikolas_Iturregi.png') }}"
                                            alt="Imagen de perfil equipo operacional Niko Iturregi">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">Niko Iturregi</h3>
                                            <h3 class="profile_equip">UI Designer</h3>
                                            <a href="https://www.linkedin.com/company/alveariumvr" class="socials"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                            </a>
                                        </div>


                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_operational/Yerai_Llamas.png') }}"
                                            alt="Imagen de perfil equipo operacional Yerai Llamas">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">Yerai_Llamas</h3>
                                            <h3 class="profile_equip">UI Designer</h3>
                                            <a href="https://www.linkedin.com/company/alveariumvr" class="socials"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                            </a>
                                        </div>

                                    </div>


                                </div>
                            </div>
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

                                    <p class="tab1_parrafo"><span class="resaltarText">La comunidad de
                                            Alvearium</span>,
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

    <a href="#"><img src="{{ asset('img/icons/icon-up-100.png') }}" alt="Icono ir cabecera página"
            class="buttonUp"></a>

    <script src="https://kit.fontawesome.com/3342157087.js" crossorigin="anonymous"></script>
    <script src="{{ asset('lib/particles/particles.min.js') }}"></script>
    <script src="{{ asset('lib/particles/app.js') }}"></script>
    <script src="{{ asset('js/buttonUp.js') }}"></script>

</body>

</html>
