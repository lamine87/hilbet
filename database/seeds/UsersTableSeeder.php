<?php
use App\Role;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        DB::table('role_user')->truncate();


        $admin = User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('password')
        ]);
        $utilisateur = User::create([
            'name'=>'utilisateur',
            'email'=>'user@user.com',
            'password'=>Hash::make('password')
        ]);

        $roleAdmin = Role::where('email','admin@admin.com')->first();
        $roleUtilisateur = Role::where('email','user@user.com')->first();

        $admin->roles()->attach($roleAdmin);
        $utilisateur->roles()->attach($roleUtilisateur);
    }
}
