<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
            'name' => 'ADMIN',
            'email' => 'admin@travel.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => \bcrypt('password'),
            'remember_token' => Str::random(20),
            'roles' => 'ADMIN'
        ]);
    }
}
