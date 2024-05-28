<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $new_train = new Train();
            $new_train->azienda = 'italo';
            $new_train->stazione_di_partenza = 'Milazzo';
            $new_train->stazione_di_arrivo = 'Napoli';
            $new_train->ora_di_partenza = '23:00:00';
            $new_train->ora_di_arrivo = '07:00:00';
            $new_train->codice_treno = '89178';
            $new_train->numero_carrozze = 9;
            $new_train->in_orario = true;
            $new_train->cancellato = false;
            $new_train->save();
        }
    }
}
