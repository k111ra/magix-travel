<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{

    protected $permissions = [

        //Roles
        ['name' => 'create_roles', 'fullname' => "Ajouter des roles"],
        ['name' => 'edit_roles', 'fullname' => "Modifier des roles"],
        ['name' => 'delete_roles', 'fullname' => "Supprimer des roles"],
        ['name' => 'manag_users', 'fullname' => "Gérer les utilisateurs"],

        //utilisateur 
        ['name' => 'create_utilisateur', 'fullname' => "Ajouter des utilisateurs"],
        ['name' => 'edit_utilisateur', 'fullname' => "Modifier des utilisateurs"],
        ['name' => 'delete_utilisateur', 'fullname' => "Supprimer des utilisateurs"],
        ['name' => 'show_utilisateur', 'fullname' => "Afficher un utilisateur"],
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        foreach($this->permissions as $permission){
            Permission::create($permission);
        }

    }
}
