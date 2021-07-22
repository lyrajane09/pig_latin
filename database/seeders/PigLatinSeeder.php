<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PigLatin;

class PigLatinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PigLatin::factory()->count(20)->create();
    }
}
