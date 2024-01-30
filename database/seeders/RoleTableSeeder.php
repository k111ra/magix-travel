<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{

    protected $roles = [
        ["name"=>"admin","fullname"=>"Administrateur"],
        ["name"=> "user","fullname"=>"Utilisateur simple"],
        ["name"=> "manager","fullname"=>"Manager"],
        ["name"=> "super_admin","fullname"=>"Super administrateur"],
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

        DB::table('roles')->delete();
        foreach($this->roles as $role){
            Role::create($role);
        }

        $su = User::where('email','admin@admin.com')->first();
        if($su){
            $su->assignRole("super_admin");
        }
    }
}
