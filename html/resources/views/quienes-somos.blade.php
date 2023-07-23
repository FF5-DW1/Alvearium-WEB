<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/jpg" href="{{ asset('img/icons/favicon-Alvearium.png') }}">
    <title>Alvearium</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quienesSomos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">


</head>

<body>
    <section class="quienesSomos">
        <div class="hero">
            <div class="hero-content">
                <div id="particles-js"></div>
                <img src="{{ asset('img/hombre_fondo_vr.png') }}" alt="Man" class="hidden">
                <div>
                    <h1 class="hero-title_layer">{{ __('Comienza una nueva experiencia') }}</h1>
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

                    <div class="cambioIdioma">
                        <div class="current">
                            @if (app()->getLocale() == 'en')
                                <span><img src="{{ asset('img/icons/en.png') }}" class="shadowLocale" alt="Bandera lenguaje español"></span>
                            @else
                                <span><img src="{{ asset('img/icons/es.png') }}" class="shadowLocale" alt="Bandera lenguaje inglés"></span>
                            @endif
                        </div>
                        <div class="options">
                            @if (app()->getLocale() == 'en')
                                <a class="locale" href="{{ asset('/locale/es') }}"><img
                                        src="{{ asset('img/icons/es.png') }}" class="shadowLocale"
                                        alt="Bandera lenguaje español"></a>
                            @else
                                <a class="locale" href="{{ asset('/locale/en') }}"><img
                                        src="{{ asset('img/icons/en.png') }}" class="shadowLocale"
                                        alt="Bandera lenguaje inglés"></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container_pestañas">

            <h2 class="quienesSomos_title_section">{{ __('Quiénes somos') }}</h2>

            <div class="tabs">
                <a href="{{ route('home') }}"><img src="{{ asset('img/icons/icon-return-80-.png') }}"
                        alt="Icono regresar pantalla principal" class="icon-return"></a>
                <div class="tab-container">
                    <div id="tab3" class="tab">
                        <a href="#tab3">{{ __('Misión, Visión, Valores') }}</a>
                        <div class="tab-content">
                            <div class="tab3_columnas">
                                <div class="tab1_columnas-left">

                                    <h2 class="tab3_title_columna">{{ __('Nuestra ') }}<br> {{ __('Misión') }}</h2>

                                    <p class="tab3_parrafo">{{ __('Acercar a la población las tecnologías avanzadas y descentralizadas, con el objetivo de ') }}
                                    <span class="bold">
                                        {{ __('mejorar la experiencia y la forma de relacionarnos entre nosotros y con nuestro entorno.') }}
                                    </span>
                                    </p>

                                </div>

                                <div class="tab3_columnas-right">

                                    <h2 class="tab3_title_columna">{{ __('Nuestra ') }}<br> {{ __('Visión') }}</h2>

                                    <p class="tab3_parrafo"><span class="bold">{{ __('La comunidad de Alvearium ') }}</span>{{ __(',a través del empleo de las tecnologías más disruptivas, ') }}
                                        <span class="bold">{{ __('liderará la humanización del metaverso.') }}</span>
                                        <br><br>
                                        {{ __('Los seres humanos podremos reproducir experiencias sensoriales más allá del espacio-tiempo que nos permitirán mejorar nuestra forma de vivir y de relacionarnos.') }}
                                    </p>

                                </div>


                            </div>

                            <div class="tab3_nuestrosValores">

                                <h2 class="tab3_title_columna">{{ __('Nuestros Valores') }}</h2>

                                <div class="tab3_nuestrosValores-item">

                                    <div class="item">
                                        <img src="{{ asset('img/icon_values/excelencia_alvearium4.png') }}"
                                            alt="Icono que acompaña al texto de cada valor">
                                        <div class="text-item-value">
                                            <h3 class="name_value">{{ __('Excelencia') }}</h3>
                                            <h3 class="description_value">{{ __('Empleo de las mejores prácticas buscando la máxima calidad.') }}</h3>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/icon_values/resiliencia_alvearium.png') }}"
                                            alt="Icono que acompaña al texto de cada valor">
                                        <div class="text-item-value">
                                            <h3 class="name_value">{{ __('Resiliencia') }}</h3>
                                            <h3 class="description_value">{{ __('Adaptación a los continuos cambios de este mundo disruptivo.') }}</h3>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/icon_values/innovacion_alvearium.png') }}"
                                            alt="Icono que acompaña al texto de cada valor">
                                        <div class="text-item-value">
                                            <h3 class="name_value">{{ __('Innovación') }}</h3>
                                            <h3 class="description_value">{{ __('Visión para impulsar nuevas ideas y aplicar la mejora continua.') }}</h3>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/icon_values/motivacion_alvearium.png') }}"
                                            alt="Icono que acompaña al texto de cada valor">
                                        <div class="text-item-value">
                                            <h3 class="name_value">{{ __('Motivación') }}</h3>
                                            <h3 class="description_value">{{ __('Actitud positiva para trabajar con perseverancia y determinación.') }}</h3>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/icon_values/trabajo_equipo__alvearium4.png') }}"
                                            alt="Icono que acompaña al texto de cada valor">
                                        <div class="text-item-value">
                                            <h3 class="name_value">{{ __('Trabajo en equipo') }}</h3>
                                            <h3 class="description_value">{{ __('Colaboración y cooperación para crear valor y multiplicar la productividad.') }}</h3>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/icon_values/comunidad_alvearium.png') }}"
                                            alt="Icono que acompaña al texto de cada valor">
                                        <div class="text-item-value">
                                            <h3 class="name_value">{{ __('Comunidad') }}</h3>
                                            <h3 class="description_value">{{ __('Fiel y colaborativa con foco en la responsabilidad social.') }}</h3>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/icon_values/etica_alvearium.png') }}"
                                            alt="Icono que acompaña al texto de cada valor">
                                        <div class="text-item-value">
                                            <h3 class="name_value">{{ __('Ética') }}</h3>
                                            <h3 class="description_value">{{ __('Transparencia, lealtad y honestidad como factores de creación de valor.') }}</h3>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab2" class="tab">
                        <a href="#tab2">{{ __('Equipo') }}</a>
                        <div class="tab-content">

                            <div class="team-direction">
                                <h2 class="title-section">{{ __('Equipo ') }}<span
                                        class="title-section-second_color">{{ __('Dirección') }}</span></h2>
                                <div class="team-direction-item">
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_direction/Luis_Manuel_Fernandez.png') }}"
                                            alt="Imagen de perfil equipo de dirección Luis Manuel Fernández">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">Luis Manuel Fernández</h3>
                                            <h3 class="profile_equip">Director Ejecutivo</h3>
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
                                            <h3 class="profile_equip"> CTO (Talento) </h3>
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
                                            <h3 class="profile_equip">CTO (Tecnología)</h3>
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
                                            <h3 class="profile_equip">CDO (Diseño)</h3>
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
                                            <h3 class="profile_equip"> CXO (Experiencia)</h3>
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
                                            <h3 class="profile_equip">Tecnología</h3>
                                            <a href="https://www.linkedin.com/company/alveariumvr" class="socials"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_direction/Dimitri _Lobato.png') }}"
                                            alt="Imagen de perfil equipo operacional Dimitri Lobato">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">Dimitri Lobato</h3>
                                            <h3 class="profile_equip">Innovación Blockchain</h3>
                                            <a href="https://www.linkedin.com/company/alveariumvr" class="socials"
                                                target="_blank">
                                                <i class="fa-brands fa-linkedin-in" style="color: #ffffff;"></i>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="team-operational">
                                <h2 class="title-section">{{ __('Equipo ') }}<span
                                        class="title-section-second_color">{{ __('Operacional') }}</span></h2>
                                <div class="team-operational-item">
                                    <div class="item">
                                        <img src="{{ asset('img/profile_pictures_operational/Alfonso_Casanova.png') }}"
                                            alt="Imagen de perfil equipo operacional Alfonso Casanova">
                                        <div class="text-item-equip">
                                            <h3 class="name_equip">Alfonso Casanova</h3>
                                            <h3 class="profile_equip">Desarrollador Unity/Unreal</h3>
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
                                            <h3 class="profile_equip">Investigador</h3>
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
                                            <h3 class="profile_equip">Finanzas</h3>
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
                                            <h3 class="profile_equip">Diseñador de UI</h3>
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
                                            <h3 class="profile_equip">Diseñador de UI</h3>
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
                        <a href="#tab1">{{ __('Qué es Alvearium') }}</a>
                        <div class="tab-content">

                            <p class="tab1_parrafo"><span class="highlight-word-paragraph">{{ __('Alvearium') }}</span>{{ __(' es una red social descentralizada en Web3, con espacios virtuales inspirados en ciudades reales, donde los usuarios, gracias a tecnologías inmersivas, un ecosistema tokenizado y las recompensas por consumir contenido en la plataforma, creará un Metaverso que genere impacto positivo en el mundo real') }}</p>

                            <br>

                            <p class="tab1_parrafo">{{ __('Se posiciona como la primera Plataforma Web3 que replica ciudades reales en el Metaverso con el propósito de generar impacto socio-económico en el mundo real') }}</p>

                            <br><br>


                            <img src="{{ asset('img/Gafas-realidad-virtual (small).png') }}"
                                alt="imagen de silueta de gafas virtuales reflejando el acceso del mundo real al virtual"
                                class="tab1_imagen_gafas">

                            
                            <h2 class="tab1_title_history">{{ __('Historia') }}</h2>

                            <p class="tab1_parrafo">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque reprehenderit beatae fugiat hic animi, qui sint quia accusantium iste! Porro delectus obcaecati provident atque. Id delectus ipsam doloribus at quo!
                            Velit, sit. Asperiores veniam aut vitae rem. Iste officiis, suscipit distinctio perferendis officia mollitia? Pariatur ea quidem soluta numquam repellat, expedita facilis omnis necessitatibus aspernatur earum. Eligendi consectetur ullam vel.
                            Error voluptate aliquam nobis inventore eos eius mollitia laudantium temporibus quae dicta! Sit, earum ea voluptatem aliquam maxime velit distinctio neque ab placeat! Facilis architecto, exercitationem ipsam omnis at ex.
                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--footer-->

    <footer class="footer_container">

        <div class="footer_contact">
            <div class="footer_frase">
                {{ __('¿Quieres estar al día de todas las novedades, o colaborar en el proyecto?') }} <br>
                {{ __('Contacta con nosotros y síguenos en redes') }}
            </div>
            <div class="footer_boton">
                <div class="buttonWrapper">
                    <a class="abrirModal">{{ __('Contacta con nosotros') }}</a>

                    <div id="ventanaModal6" class="modal formModal">
                        <span class="form_cerrar">&times;</span>
                        <form action="" class="form_container">
                            <div class="input-container">
                                <div class="input-content">
                                    <div class="input-dist">
                                        <div class="input-type">
                                            <input placeholder="Nombre" required="" type="text" class="input-is">
                                            <input placeholder="Teléfono" required="" type="" class="input-is">
                                            <input placeholder="E-mail" required="" type="text" class="input-is">
                                            <textarea placeholder="Texto" required="" type="" class="input-is"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button>
                                    Button
                                </button>
                            </div>
                            
                        </form>
                    </div>


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
                <p><a href="#">{{ __('Conoce nuestra política de privacidad') }}</a></p>
                <p><a href="#">{{ __('Conoce nuestra receta de cookies 😊') }}</a></p>
            </div>
            <div class="footer_derechos">
                Alvearium 2023 ®
            </div>
        </div>
    </footer>

    <a href="#"><img src="{{ asset('img/icons/icon-up-100.png') }}" alt="Icono ir cabecera página" class ="buttonUp"></a>

    <script src="https://kit.fontawesome.com/3342157087.js" crossorigin="anonymous"></script>
    <script src="{{ asset('lib/particles/particles.min.js') }}"></script>
    <script src="{{ asset('lib/particles/app.js') }}"></script>
    <script src="{{ asset('js/buttonUp.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>

</body>

</html>
