<?php

namespace Database\Factories;

use App\Models\PigLatin;
use Illuminate\Database\Eloquent\Factories\Factory;

class PigLatinFactory extends Factory
{
    protected $model = PigLatin::class;

    public function definition(): array
    {
    	return [
            'word' => $this->faker->word()
        ];
    }
}
