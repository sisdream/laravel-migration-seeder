<?php

namespace Database\Seeders;

use App\Models\Trains;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(__DIR__ . "../csv/train.csv","r");
        while (!feof($file)) {
            $train_data = fgetcsv($file);
            $train = new Trains;

            $train->id = $train_data[0];
            $train->azienda = $train_data[1];
            $train->stazione_partenza = $train_data[2];
            $train->stazione_arrivo = $train_data[3];
            $train->orario_partenza = $train_data[4];
            $train->orario_arrivo = $train_data[5];
            $train->codice_treno = $train_data[6];
            $train->numero_carrozze = $train_data[7];
            $train->in_orario = $train_data[8];
            $train->cancellato = $train_data[9];

            $train->timestamps = false;
            $train->save();
        }
        
        // foreach($trains_data as $train_data){
        //     $train = new Trains;

        //     $train->fill($train_data);
    
        //     $train->timestamps = false;
        //     $train->save();
        // }
    }
}
