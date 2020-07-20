<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Tienda;
class UserSeedCreate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
       
        $user->name = 'User';
        $user->email = 'example@example.com';
        $user->password = bcrypt('secret');
        $user->save();

        //datos de la tienda 

        $tienda = new Tienda();

        $tienda->nombre = "null";
        $tienda->descripcion = "null";
        $tienda->telefono = "null";
        $tienda->correo = "null";
        $tienda->facebook = "null";
        $tienda->save();

        
        
        




    }
}
