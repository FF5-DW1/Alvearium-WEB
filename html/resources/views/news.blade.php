<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="{{ asset('img/icons/favicon-Alvearium.png') }}">
    <title>Alvearium</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newsExtended.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
</head>

<body>

    @include('partials.header-2')

    <main>
        <div class="homeIconAndTitle">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/icons/icon-return-80-.png') }}" alt="Icono regresar pantalla principal" class="icon-return">
            </a>
            <h1>{{ __('Noticias') }}</h1>
        </div>
        <img src="{{ asset('img/alvearium-logo.png') }}" alt="Logo Alvearium">
        <h2>Creación y lanzamiento del primer video promocional</h2>
        <span class="date">20 de julio 2022</span>
        <br><br>
        <p>Uno de los primeros objetivos que nos hemos planteado ha sido la realización de un video promocional, pues entendemos que este es uno de los medios más adecuados para mostrar nuestras ideas. Ha sido crucial transmitir la esencia de nuestro proyecto de manera accesible y, al mismo tiempo, capturar parte de la pasión que sentimos por él. Hemos afrontado el reto con los recursos limitados de una startup emergente.</p><br>

        <p>Para lograrlo, hemos decidido confiar en Deusens, una agencia especializada en crear soluciones tecnológicas interactivas a medida, combinando desarrollo y creatividad. Además, son pioneros en el uso de tecnologías inmersivas en España.</p><br>

        <p>A lo largo de varios meses, hemos trabajado en estrecha colaboración con Deusens, intercambiando propuestas y manteniendo un diálogo constante, hasta que finalmente hemos logrado lanzar nuestro primer video.</p><br>

        <p>Creemos que el resultado final consigue dar una introducción convincente y nos sumerge brevemente en el emocionante mundo de Alvearium que está por venir. El video transmite la idea de que nos encontramos en el umbral de una nueva era por construir, llena de infinitas posibilidades que estarán al alcance de cualquier persona gracias a las nuevas tecnologías. Alvearium busca convertirse en el vehículo que permita a las personas acercarse más a alcanzar sus objetivos y experimentar nuevas formas de interactuar con el mundo.</p>
    </main>
    <h3>{{ __('Más noticias') }}</h3>
    <hr>
    <section id="moreNews">
        <div class="newsItem">
            <div class="frame">
                <img src="{{ asset('img/alvearium-logo.png') }}" alt="Logo Alvearium" class="moreNewsImg">
            </div>
            <div class="titleAndDate">
                <h3>Lanzamiento del whitepaper y aprobación del tokenomics</h3>
                <p>6 jul. 2022</p>
            </div>
        </div>
        <hr>
        <div class="newsItem">
            <div class="frame">
                <img src="{{ asset('img/alvearium-logo.png') }}" alt="Logo Alvearium" class="moreNewsImg">
            </div>
            <div class="titleAndDate">
                <h3>Desarrollo de la prueba de concepto (versión web)</h3>
                <p>3 mar. 2022</p>
            </div>
        </div>
        <hr>
        <div class="newsItem">
            <div class="frame">
                <img src="{{ asset('img/alvearium-logo.png') }}" alt="Logo Alvearium" class="moreNewsImg">
            </div>
            <div class="titleAndDate">
                <h3>Fundación de Alvearium</h3>
                <p>28 ene. 2022</p>
            </div>
        </div>
        <hr>
    </section>

    @include('partials.footer')
    @include('partials.form')

    <a href="#">
        <img src="{{ asset('img/icons/icon-up-100.png') }}" alt="Icono ir cabecera página" class="buttonUp">
    </a>

    <script src="https://kit.fontawesome.com/3342157087.js" crossorigin="anonymous"></script>
    <script src="{{ asset('lib/particles/particles.min.js') }}"></script>
    <script src="{{ asset('lib/particles/app.js') }}"></script>
    <script src="{{ asset('js/buttonUp.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="{{ asset('js/newsExt.js') }}"></script>
    <script src="{{ asset('js/form.js') }}"></script>

    @if ($errors->any() or session('info'))
    <script>
        let modalForm = document.querySelector("#ventanaModal7");
        modalForm.style.display = "block";
    </script>
    @endif
</body>

</html>