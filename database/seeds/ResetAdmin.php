<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResetAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /*
     * caso seja necessário resetar o admin execute esse comando
     * php artisan db:seed --class=ResetAdmin
     *
     */
    public function run()
    {
        DB::table('users')->truncate();

        \App\User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'role_id' => 1 ,
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
        ]);
    }
}
