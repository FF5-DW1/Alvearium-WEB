<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="{{ asset('img/icons/favicon-Alvearium.png') }}">
    <title>Alvearium</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newsExtended.css') }}">
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
        <h2>Título de noticia</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus pariatur error eius enim at? Vero fuga delectus nesciunt placeat voluptas tenetur veritatis laboriosam accusantium earum, exercitationem magni magnam quae quibusdam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et quod minus ipsa natus ea perferendis officia architecto blanditiis voluptas neque provident, distinctio veritatis ullam explicabo quasi nisi tenetur? Sunt?</p>
    </main>
    <h3>{{ __('Más noticias') }}</h3>
    <hr>
    <section id="moreNews">
        <div class="newsItem">
            <div class="frame">
                <img src="{{ asset('img/alvearium-logo.png') }}" alt="Logo Alvearium" class="moreNewsImg">
            </div>
            <div class="titleAndDate">
                <h3>Título de otra noticia más largo como ejemplo y tal y eso y eso y tal y largo y mas largo ououiiuuioyu sdadasdasd</h3>
                <p>23 ene. 2023</p>
            </div>
        </div>
        <hr>
        <div class="newsItem">
            <div class="frame">
                <img src="{{ asset('img/alvearium-logo.png') }}" alt="Logo Alvearium" class="moreNewsImg">
            </div>
            <div class="titleAndDate">
                <h3>Título de otra noticia más largo como ejemplo y tal y eso y eso y tal y largo y mas largo ououiiuuioyu sdadasdasd</h3>
                <p>23 ene. 2023</p>
            </div>
        </div>
        <hr>
        <div class="newsItem">
            <div class="frame">
                <img src="{{ asset('img/alvearium-logo.png') }}" alt="Logo Alvearium" class="moreNewsImg">
            </div>
            <div class="titleAndDate">
                <h3>Título de otra noticia más largo como ejemplo y tal y eso y eso y tal y largo y mas largo ououiiuuioyu sdadasdasd</h3>
                <p>23 ene. 2023</p>
            </div>
        </div>
        <hr>
    </section>

    @include('partials.footer');
    @include('partials.form');
    <script src="https://kit.fontawesome.com/3342157087.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/newsExt.js') }}"></script>
</body>

</html>