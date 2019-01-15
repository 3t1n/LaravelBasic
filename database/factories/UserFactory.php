<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Quando você der migrate use esse factory para criar o usuário padrão do sistema

| email: admin@mail.com
| senha: secret
|
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => 'Admin',
        'email' => 'admin@mail.com',
        'email_verified_at' => now(),
        'role_id' => 1 ,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
