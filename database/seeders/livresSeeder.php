<?php

namespace Database\Seeders;

use App\Models\livres;
use Illuminate\Database\Seeder;

class livresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        livres::factory(10)->create();
    }
}
