<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trainer;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trainer::create([
             'name' => 'Karim fouad',
             'spec' => 'web developement',
             'img' => '1.png'

        ]);

        Trainer::create([
            'name' => 'Mostapha Ahmed',
            'spec' => 'web developement',
            'img' => '2.png'

       ]);

       Trainer::create([
        'name' => 'Ahmed hossni',
        'spec' => 'dentist',
        'img' => '3.png'

   ]);

   Trainer::create([
    'name' => 'mahmoud fouazi',
    'spec' => 'doctor',
    'img' => '4.png'

]);

Trainer::create([
    'name' => 'Karima hazem',
    'spec' => 'english teacher',
    'img' => '5.png'

]);
    }
}
