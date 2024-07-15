<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\KeluhanPelanggan;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Label::factory()->create([
        //     'nama_label' => 'pending',
        // ]);
        // Label::factory()->create([
        //     'nama_label' => 'selesai',
        // ]);

        KeluhanPelanggan::factory()->count(5)->create();
    }
}
