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
                        <span><img src="{{ asset('img/icons/en.png') }}" class="shadowLocale"
                                alt="Bandera lenguaje español"></span>
                    @else
                        <span><img src="{{ asset('img/icons/es.png') }}" class="shadowLocale"
                                alt="Bandera lenguaje inglés"></span>
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
