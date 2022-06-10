<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userReclutador=User::create([
            'name' => 'Oscar Castañeda',
            'email' => 'oscardavid120896@gmail.com',
            'password' => Hash::make('oscar1208'),
            'empresa' => '1',
            'tipoUsuario' => '1',
        ]);

        $user1=User::create([
            'name' => 'david Castañeda',
            'email' => 'davidoscar120896@gmail.com',
            'password' => Hash::make('oscar1208'),
            'empresa' => '1',
            'tipoUsuario' => '2',
        ]);

    }
}
