<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Criando usuario admin
      User::create(['name' => 'Admin', 'email' => 'admin@admin.com', 'password' => Hash::make('admin')]);
      // User::create(['name' => 'ismael', 'email' => 'ismael@ismael.com', 'password' => Hash::make('ismael')]);
    }
}
