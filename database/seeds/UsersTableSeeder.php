<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        

        $admin = user::create([
             'name' => 'admin MK',
             'email' => 'admin@admin.com',
             'avatars'  => 'IMG-YVAN.jpg' ,
             'password' => Hash::make('password'),
             ]);
 
        $Superviseur = user::create([
        'name' => 'Germaine',
        'email' => 'Germaine@Superviseur.com',
        'avatars'  => 'IMG-20201108-WA0012.jpg' ,
        'password' => Hash::make('password'),
        ]);
 
 
        $Utilisateur = user::create([
            'name' => 'Utilisateur',
            'email' => 'Utilisateur@Utilisateur.com',
            'avatars'  => '' ,
            'password' => Hash::make('password') ,
            ]);
        $adminRole = Role::where('name','admin')->first();
        $SuperviseurRole = Role::where('name','Superviseur')->first();
        $UtilisateurRole = Role::where('name','Utilisateur')->first();
 // On attache les roles avec les différents utilisateur
        $admin->roles()->attach($adminRole);
        $Superviseur->roles()->attach($SuperviseurRole);
        $Utilisateur->roles()->attach($UtilisateurRole);
    }
}
