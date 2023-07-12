<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quienesSomos.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/hero.css') }}"> --}}

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
                    <a href="https://www.facebook.com/people/Alvearium/100083367819508/" target="_blank" class="socials">
                        <i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="container_pestañas">

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
                      <h2>Titulo 1</h2>
                      <p>Lorem ipsum ...</p>
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