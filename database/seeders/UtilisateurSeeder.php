<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $utilisateur  = new User();
        $utilisateur->name = "RAKOTONDRAIBE Michael";
        $utilisateur->email = "michael@gmail.com";
        $utilisateur->password = Hash::make('michael123');
        $utilisateur->save();
    }
}
