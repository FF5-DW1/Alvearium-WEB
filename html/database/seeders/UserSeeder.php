<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $adminRole = Role::where('name', 'Admin')->first();

        $user = User::create([
            'name' => 'Luis',
            'email' => 'luis@luis.com',
            'password' => bcrypt('1122334455'),
        ]);

        $user->assignRole('Admin');
    }
}
