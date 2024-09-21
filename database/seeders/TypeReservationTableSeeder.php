<?php

namespace Database\Seeders;

use App\Models\TypeReservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['nom' => 'Vol Simple'],
            ['nom' => 'Vol Aller-Retour'],
            ['nom' => 'Hotel'],
            ['nom' => 'Tour'],
        ];

        foreach ($types as $type) {
            TypeReservation::create($type);
        }
    }
}
