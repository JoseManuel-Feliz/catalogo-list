<?php

namespace Database\Seeders;

use App\Models\Catalogo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $catalogo = Catalogo::all();

        for ( $i=0; $i < 40; $i++ ) {
            $newItem = new Catalogo();
            $newItem->name = $faker->word();
            $newItem->description = $faker->text(30, 100);
            $newItem->save();
        }
    }
}
