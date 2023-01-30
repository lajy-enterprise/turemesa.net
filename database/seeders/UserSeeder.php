<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

//---------------

use App\Models\Status;
// use App\Models\Success;

//---------------


/*
* -- Permission
*/
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
/*
* -- Permission
*/



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        * -- Permission
        */
        
        // -- Permisos
        //$permission =
        /*Permission::create(['name' => 'ver:role']);
        Permission::create(['name' => 'crear:role']);
        Permission::create(['name' => 'editar:role']);
        Permission::create(['name' => 'eliminar:role']);

        Permission::create(['name' => 'ver:permiso']);

        Permission::create(['name' => 'ver:usuario']);
        Permission::create(['name' => 'crear:usuario']);
        Permission::create(['name' => 'editar:usuario']);
        Permission::create(['name' => 'eliminar:usuario']);*/

        /*
        * -- Permission
        */

        // -- Roles
        $roleAdmin = Role::create(['name' => 'admin']);
        // $roleOrg = Role::create(['name' => 'org']);
        $roleUser = Role::create(['name' => 'user']);
        // $rolePartner = Role::create(['name' => 'partner']);
        

        $user1 = User::create([
            'name' => 'Administrador',
            'email' => 'Administrador@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
        
        $user1->assignRole($roleAdmin);

        //-------------------

        // $user2 = User::create([
        //     'name' => 'Organizador',
        //     'email' => 'Organizador@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);

        // $user2->assignRole($roleOrg);

        //-------------------

        $user3 = User::create([
            'name' => 'User',
            'email' => 'User@gmail.com',
            'password' => bcrypt('123456789'),
        ]);

        $user3->assignRole($roleUser);

        //-------------------

        // $user4 = User::create([
        //     'name' => 'Partner',
        //     'email' => 'Parnert@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);

        // $user4->assignRole($rolePartner);

        //-------------------

        /*
        * -- Status
        */
        
        Status::create([
            'type' => 'En_Proceso',
        ]);

        Status::create([
            'type' => 'Pagado',
        ]);

        Status::create([
            'type' => 'Fraude',
        ]);

        Status::create([
            'type' => 'Borrado',
        ]);

        Status::create([
            'type' => 'Finalizado',
        ]);

        //-------------------

        /*
        * -- Success
        */
        
        // Success::create([
        //     'type' => 'Created',
        // ]);

        // Success::create([
        //     'type' => 'Aproved',
        // ]);

        // Success::create([
        //     'type' => 'Update',
        // ]);

        // Success::create([
        //     'type' => 'Deleted',
        // ]);

        // Success::create([
        //     'type' => 'Is_Fraud',
        // ]);

        // Success::create([
        //     'type' => 'Finish',
        // ]);

        // Success::create([
        //     'type' => 'Winned_Points',
        // ]);

        // Success::create([
        //     'type' => 'Donated_Winned',
        // ]);

    }
}
