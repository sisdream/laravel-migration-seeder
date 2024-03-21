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
        $trains_data = [
           [
            "id" => 7,
            "azienda" => "Italo",
            "stazione_partenza" => "Roma",
            "stazione_arrivo" => "Milano",
            "orario_partenza" => "20:06:34",
            "orario_arrivo" => "23:55:34",
            "codice_treno" => "13417",
            "numero_carrozze" => 6,
            "in_orario" => 1,
            "cancellato" => 0,
           ],
           [
            "id" => 3,
            "azienda" => "Freccia rossa",
            "stazione_partenza" => "Napoli",
            "stazione_arrivo" => "Milano",
            "orario_partenza" => "10:06:34",
            "orario_arrivo" => "16:55:34",
            "codice_treno" => "34562",
            "numero_carrozze" => 5,
            "in_orario" => 1,
            "cancellato" => 1,
           ],
           [
            "id" => 4,
            "azienda" => "EAV",
            "stazione_partenza" => "Torre Annunziata",
            "stazione_arrivo" => "Sorrento",
            "orario_partenza" => "07:06:34",
            "orario_arrivo" => "08:15:34",
            "codice_treno" => "98542",
            "numero_carrozze" => 5,
            "in_orario" => 0,
            "cancellato" => 1,
           ],
        ];

        foreach($trains_data as $train_data){
            $train = new Trains;

            $train->id = $train_data['id'];
            $train->azienda = $train_data['azienda'];
            $train->stazione_partenza = $train_data['stazione_partenza'];
            $train->stazione_arrivo = $train_data['stazione_arrivo'];
            $train->orario_partenza = $train_data['orario_partenza'];
            $train->orario_arrivo = $train_data['orario_arrivo'];
            $train->codice_treno = $train_data['codice_treno'];
            $train->numero_carrozze = $train_data['numero_carrozze'];
            $train->in_orario = $train_data['in_orario'];
            $train->cancellato = $train_data['cancellato'];
    
            $train->timestamps = false;
            $train->save();
        }
    }
}
