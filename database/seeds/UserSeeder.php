<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rania Ranoosh',
            'email' => 'rania@rania.com',
            'password' => bcrypt('123456')
        ]);
    }
}
