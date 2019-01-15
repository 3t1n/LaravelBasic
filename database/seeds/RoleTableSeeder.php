<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder{

    public function run()
    {
        /*  Dependendo da regra do negócio adcionar aqui as novas permisões de usuários
         *  cada Role::create irá criar um novo cargo para o usuário e dependendo dele
         *  para ter acesso a certas partes do sistema
         *
         * */

        if (App::environment() === 'production') {
            exit('Cuidado pois você está em produção');
        }
        DB::table('role')->truncate();

        Role::create([
            'id'            => 1,
            'name'          => 'Root',
            'description'   => 'Tem acesso a todo sistema'
        ]);
        Role::create([
            'id'            => 2,
            'name'          => 'Administrador',
            'description'   => 'Acesso total a área de administração'
        ]);
        Role::create([
            'id'            => 5,
            'name'          => 'Usuario',
            'description'   => 'Usuário comum'
        ]);
    }
}