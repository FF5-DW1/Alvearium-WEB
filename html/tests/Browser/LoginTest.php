<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations; // Esto es importante para realizar pruebas con la base de datos

    /**
     * Prueba de inicio de sesión exitoso.
     *
     * @return void
     */
    public function testLoginSuccess()
    {
        // Aquí asumimos que existe un usuario registrado en la base de datos con credenciales válidas
        $user = factory(\App\Models\User::class)->create([
            'email' => 'ejemplo@dominio.com',
            'password' => bcrypt('contraseña'),
        ]);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'contraseña')
                ->press('Iniciar sesión')
                ->assertPathIs('/home') // Ajusta esto según la redirección después del inicio de sesión exitoso
                ->assertSee('Bienvenido'); // Ajusta esto para verificar algún elemento que se muestre después del inicio de sesión exitoso
        });
    }

    /**
     * Prueba de inicio de sesión fallido.
     *
     * @return void
     */
    public function testLoginFailure()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'usuario_inexistente@dominio.com')
                ->type('password', 'contraseña_incorrecta')
                ->press('Iniciar sesión')
                ->assertPathIs('/login') // Ajusta esto según la redirección después del inicio de sesión fallido
                ->assertSee('Estas credenciales no coinciden con nuestros registros.'); // Ajusta esto para verificar el mensaje de error que se muestra en el inicio de sesión fallido
        });
    }
}
