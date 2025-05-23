<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;


class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run()
{
    Author::insert([
        ['name' => 'Tere Liye'],
        ['name' => 'Andrea Hirata'],
        ['name' => 'Dee Lestari'],
        ['name' => 'Ahmad Fuadi'],
        ['name' => 'Habiburrahman El Shirazy'],
        ['name' => 'Asma Nadia'],
        ['name' => 'Boy Candra'],
        ['name' => 'Dewi Lestari'],
        ['name' => 'Eka Kurniawan'],
        ['name' => 'Leila S. Chudori'],
        ['name' => 'Sapardi Djoko Damono'],
        ['name' => 'Pramoedya Ananta Toer'],
        ['name' => 'Pidi Baiq'],
        ['name' => 'Ika Natassa'],
        ['name' => 'Mira W.'],
    ]);
}


}
