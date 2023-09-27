<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $company = ['Trenitalia', 'Italo', 'Frecciarossa', 'Trenord'];
            $city = ['Roma', 'Milano', 'Napoli', 'Palermo', 'Bologna', 'Genova'];
            $date = ['2023-09-27', '2023-09-30', '2023-09-28'];

            $train = new Train();

            $train->azienda = $faker->randomElement($company);
            $train->data_partenza = $faker->randomElement($date);
            $train->stazione_partenza = $faker->randomElement($city);
            $train->stazione_arrivo = $faker->randomElement($city);
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->unique()->randomNumber(5);
            $train->numero_carrozze = $faker->numberBetween(5, 20);
            $train->in_orario = $faker->boolean;
            $train->cancellato = $faker->boolean;

            $train->save();
        }
    }
}
