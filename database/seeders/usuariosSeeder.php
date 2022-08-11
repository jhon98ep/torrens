<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jhonatan',
            'fullname' => 'Fernandez',
            'phone' => 3123456789,
            'email' => 'Jhonatan@prueba.com',
            'password' => bcrypt('Prueba12'),
        ]);
  
        DB::table('users')->insert([
            'name' => 'Jhon jader',
            'fullname' => 'estrada pizarro',
            'phone' => 3184535680,
            'email' => 'estradajhon07@gmail.com',
            'password' => bcrypt('A1234567'),
        ]);
          
        $arrays = range(0,8);
        foreach ($arrays as $valor) {
        DB::table('users')->insert([	            
            'name' => Str::random(10),
            'fullname' => Str::random(10),
            'phone' => rand(1111111111, 9999999999),
            'email' => Str::random(10)."@".Str::random(10),
            'password' => bcrypt('A1234567'),
        ]);
        }
    }
}
