<?php

namespace Database\Seeders;
use App\Models\Auteur;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AuteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       
          
        
        

        auteur::factory(10)->create();
    }
    
    }
