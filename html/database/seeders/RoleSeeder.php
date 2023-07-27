<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
// {
//     public function run()
//     {
//         // Verificar si el rol ya existe antes de crearlo
//         if (!Role::where('name', 'Admin')->exists()) {
//             $role1 = Role::create(['name' => 'Admin']);
//         }

//         if (!Role::where('name', 'Editor')->exists()) {
//             $role2 = Role::create(['name' => 'Editor']);
//         }

//         // Crear el permiso solo si no existe
//         if (!Permission::where('name', 'dashboard')->exists()) {
//             $dashboardPermission = Permission::create(['name' => 'dashboard']);
//         }

//         // Opcional: Asignar el permiso 'dashboard' al rol 'Admin'
//         if (isset($role1) && isset($dashboardPermission)) {
//             $role1->givePermissionTo($dashboardPermission);
//         }
//     }
// }

{
    public function run()
    {
        // Verificar si el rol 'Admin' ya existe para el guard 'web'
        $role1 = Role::firstOrCreate(['name' => 'Admin', 'guard_name' => 'web']);
        $role2 = Role::firstOrCreate(['name' => 'Editor', 'guard_name' => 'web']);

        // Crear el permiso 'dashboard' solo si no existe
        $dashboardPermission = Permission::firstOrCreate(['name' => 'dashboard', 'guard_name' => 'web']);

        // Asignar el permiso 'dashboard' al rol 'Admin' solo si no está asignado previamente
        if (!$role1->hasPermissionTo($dashboardPermission)) {
            $role1->givePermissionTo($dashboardPermission);
        }
    }
}
