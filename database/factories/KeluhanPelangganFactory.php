<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KeluhanPelanggan>
 */
class KeluhanPelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomor_pelanggan' => $this->faker->numerify('#####'),
            'nama_pelanggan' => $this->faker->name,
            'nomor_hp' => $this->faker->numerify('########'),
            'keterangan' => $this->faker->sentence(4),
            'penanganan' => $this->faker->sentence(4),
            'status' => mt_rand(0,1),
            'observasi' => mt_rand(0,1)
        ];
    }
}
