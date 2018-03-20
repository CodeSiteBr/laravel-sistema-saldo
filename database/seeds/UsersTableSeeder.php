<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Marcelo Camargo',
            'email'     => 'celaummm@gmail.com',
            'password'  => bcrypt('123456'),
        ]);
        
        User::create([
            'name'      => 'Outro Usuário',
            'email'     => 'outro@gmail.com',
            'password'  => bcrypt('123456'),
        ]);
    }
}
