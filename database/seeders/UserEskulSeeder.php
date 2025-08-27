<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User as Usr;
use App\Models\Eskul as Eskul;

class UserEskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 1; $i <= 10 ; $i++){
            Usr::create([
                'name' => "User $i",
                'email' => "user$i@gmail.com",
                'password' => bcrypt('password')
            ]);
        }

        $listEskul = ['Badminton', 'Basket', 'Marching Band'];
        foreach($listEskul as $eskul) {
            Eskul::create([
                'name' => $eskul
            ]);
        }
    }
}
