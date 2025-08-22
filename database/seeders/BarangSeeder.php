<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang as Brg;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * for make seeder use a -> php artisan make:seeder BarangSeeder    
     * for Run database seed used command -> php artisan db:seed --class=BarangSeeder
     */
    public function run(): void
    {
        for ($i = 2; $i < 50; $i++) {
            Brg::create([
                'users_id' => 1,
                'name' => 'Buku ' . $i,
                'description' => 'ini buku ke ' .$i,
            ]);
        }
    }
}
