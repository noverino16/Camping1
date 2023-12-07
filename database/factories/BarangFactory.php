<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_toko' => fake()->randomDigit(),
            'nama_barang' => fake()->name(),
            'jenis_barang' => fake()->randomAscii(),
            'harga_sewa' => fake()->randomDigit('########'),
            'stock_barang' => fake()->randomDigit(),
         
        ];
    }
}
