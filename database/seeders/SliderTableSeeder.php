<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sliders')->insert([
            [
                'title' => 'Hypto Krypto',
                'description' => 'Una tavola versatile perfetta per onde di ogni tipo.',
                'features' => 'Volume ottimizzato, pinna centrale, rail bassi',
                'dimension' => '5\'8" x 20" x 2 1/2"',
                'price' => 850.00,
                'rating' => 5,
                'color_scheme' => 'blue',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Wavestorm',
                'description' => 'Ideale per principianti, con una struttura in schiuma per la massima sicurezza.',
                'features' => 'Struttura morbida, leash incluso, design leggero',
                'dimension' => '8\'0" x 22 1/2" x 3 1/4"',
                'price' => 299.99,
                'rating' => 4,
                'color_scheme' => 'red',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Lost Mayhem',
                'description' => 'Tavola da surf ad alte prestazioni per surfisti avanzati.',
                'features' => 'Tail squadrato, tecnologia Carbon Wrap, design moderno',
                'dimension' => '6\'1" x 19 1/8" x 2 7/16"',
                'price' => 775.00,
                'rating' => 5,
                'color_scheme' => 'green',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Firewire Dominator',
                'description' => 'Un mix perfetto tra velocità, potenza e flessibilità.',
                'features' => 'Tecnologia Helium, outline generoso, versatile',
                'dimension' => '5\'10" x 20 1/2" x 2 3/8"',
                'price' => 800.00,
                'rating' => 5,
                'color_scheme' => 'yellow',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Channel Islands Average Joe',
                'description' => 'Perfetta per divertirsi nelle giornate di onde piccole.',
                'features' => 'Larga al centro, tail largo, nose arrotondato',
                'dimension' => '5\'5" x 21 3/4" x 2 5/8"',
                'price' => 695.00,
                'rating' => 4,
                'color_scheme' => 'pink',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Tomo Evo',
                'description' => 'Design innovativo per una tavola compatta e veloce.',
                'features' => 'Bottom a doppio concavo, nose ridotto, tail largo',
                'dimension' => '5\'3" x 19 1/2" x 2 5/16"',
                'price' => 760.00,
                'rating' => 5,
                'color_scheme' => 'black',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Catch Surf Odysea',
                'description' => 'Divertimento garantito con questa tavola soft-top.',
                'features' => 'Soft-top, tri-fin, leash incluso',
                'dimension' => '6\'0" x 22" x 3 1/8"',
                'price' => 350.00,
                'rating' => 4,
                'color_scheme' => 'orange',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);   
    }
}
