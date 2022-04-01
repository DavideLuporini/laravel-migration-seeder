<?php

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = config('trains');
        foreach ($trains as $train) {
            $new_train = new Train();
            $new_train->fill($train);
            $new_train->save();
        }
    }
}
