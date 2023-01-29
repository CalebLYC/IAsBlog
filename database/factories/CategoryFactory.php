<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            [
                'id' => 2,
                'libelle' => 'World',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'libelle' => 'Intelligence artificielle',
                'created_at' => now(),
            ],
        ];
    }
}
