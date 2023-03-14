<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//MODELS
use App\Models\train;

//Helpers
use Faker\Generator as Faker;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $newTrain = new train;
        $newTrain->Azienda = $faker->company();
        $newTrain->Stazione_di_arrivo = $faker->city();
        $newTrain->Stazione_di_partenza = $faker->city();
        while ($newTrain->stazione_di_arrivo == $newTrain->Stazione_di_partenza) {
            $newTrain->Stazione_di_arrivo = $faker->city();
        }
        $newTrain->Orario_di_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
        $newTrain->Orario_di_arrivo = $faker->dateTimeBetween('+1 week', '+2 week') ;
        $newTrain->Codice_treno = $faker->bothify('??##??');
        $newTrain->Numero_carrozze = $faker->randomDigitNotNull();
        $newTrain->In_orario = $faker->boolean(); //uguale a quello di sotto
        $newTrain->Cancellato = $faker->boolean(); //uguale a quello di sopra
        $newTrain->save();
    }
}
