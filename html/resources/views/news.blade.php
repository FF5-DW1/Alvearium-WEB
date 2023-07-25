<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alvearium</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newsExtended.css') }}">
</head>

<body>
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
                <a href="https://www.facebook.com/people/Alvearium/100083367819508/" target="_blank" class="socials">
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
                        <a class="locale" href="{{ asset('/locale/es') }}"><img src="{{ asset('img/icons/es.png') }}" class="shadowLocale" alt="Bandera lenguaje español"></a>
                        @else
                        <a class="locale" href="{{ asset('/locale/en') }}"><img src="{{ asset('img/icons/en.png') }}" class="shadowLocale" alt="Bandera lenguaje inglés"></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="homeIconAndTitle">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/icons/icon-return-80-.png') }}" alt="Icono regresar pantalla principal" class="icon-return">
            </a>
            <h1>{{ __('Noticias') }}</h1>
        </div>
        <div class="img"></div>
        <h2>Título de noticia</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus pariatur error eius enim at? Vero fuga delectus nesciunt placeat voluptas tenetur veritatis laboriosam accusantium earum, exercitationem magni magnam quae quibusdam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et quod minus ipsa natus ea perferendis officia architecto blanditiis voluptas neque provident, distinctio veritatis ullam explicabo quasi nisi tenetur? Sunt?</p>
    </main>
    <h3>{{ __('Más noticias') }}</h3>
    <hr>
    <section>
        <div class="newsItem">
            <div class="moreNewsImg"></div>
            <div class="titleAndDate">
                <h3>Título de otra noticia más largo como ejemplo y tal y eso</h3>
                <p>23 ene. 2023</p>
            </div>
        </div>
        <hr>
        <div class="newsItem">
            <div class="moreNewsImg"></div>
            <div class="titleAndDate">
                <h3>Título de otra noticia más largo</h3>
                <p>23 ene. 2023</p>
            </div>
        </div>
        <hr>
        <div class="newsItem">
            <div class="moreNewsImg"></div>
            <div class="titleAndDate">
                <h3>Título de otra noticia más largo</h3>
                <p>23 ene. 2023</p>
            </div>
        </div>
        <hr>
        <div class="newsItem">
            <div class="moreNewsImg"></div>
            <div class="titleAndDate">
                <h3>Título de otra noticia más largo</h3>
                <p>23 ene. 2023</p>
            </div>
        </div>
    </section>
    <script src="https://kit.fontawesome.com/3342157087.js" crossorigin="anonymous"></script>
</body>

</html>