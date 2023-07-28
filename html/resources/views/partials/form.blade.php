<div id="ventanaModal7" class="modal formModal">
    <span class="form_cerrar">&times;</span>
    <form action="{{ route('contactForm.store') }}" method="POST" class="form_container" autocomplete="off">


        @csrf

        <div class="input-container">
            <div class="input-content">
                @if (session('info'))
                <p class="form-confirm">{{ session('info') }}</p>

                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        let element = document.querySelector('.form-confirm');
                        let opacity = 1;
                        let intervalID = setInterval(() => {
                            opacity -= 0.1;
                            if (opacity <= 0) {
                                clearInterval(intervalID);
                                opacity = 0;
                            }
                            element.style.opacity = opacity.toString();
                        }, 400);
                    });
                </script>
                @endif
                <div class="input-dist">
                    <div class="input-type">
                        <input name="name" placeholder="{{ __('Nombre') }}" required type="text" aria-label="Pon tu nombre" class="input-is" value="{{ old('name') }}" data-field=" name">
                        @error('name')
                        <p class="form-p-red"><strong>{{ $message }}</strong></p>
                        @enderror
                        <input name="tel" placeholder="{{ __('Teléfono') }}" required type="tel" aria-label="Pon tu teléfono" class="input-is" value="{{ old('tel') }}" data-field=" phone">
                        @error('tel')
                        <p class="form-p-red"><strong>{{ $message }}</strong></p>
                        @enderror
                        <input name="email" placeholder="{{ __('E-mail') }}" required type="email" aria-label="Pon tu email" class="input-is" value="{{ old('email') }}" data-field="email">
                        @error('email')
                        <p class="form-p-red"><strong>{{ $message }}</strong></p>
                        @enderror
                        <textarea name="message" placeholder="{{ __('Mensaje') }}" data-field="comments" required aria-label="Pon tu comentario" class="input-is">{{ old('message') }}</textarea>
                        @error('message')
                        <p class="form-p-red"><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>
                </div>

            </div>
            <button type="submit">
                {{ __('ENVIAR') }}
            </button>
        </div>

    </form>
</div>