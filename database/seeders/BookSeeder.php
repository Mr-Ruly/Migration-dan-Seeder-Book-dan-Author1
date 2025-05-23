<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Book::insert([
        ['title' => 'Rindu', 'author_id' => 1],
        ['title' => 'Laskar Pelangi', 'author_id' => 2],
        ['title' => 'Supernova', 'author_id' => 3],
        ['title' => 'Negeri 5 Menara', 'author_id' => 4],
        ['title' => 'Ayat-Ayat Cinta', 'author_id' => 5],
        ['title' => 'Assalamualaikum Beijing', 'author_id' => 6],
        ['title' => 'Origami Hati', 'author_id' => 7],
        ['title' => 'Rectoverso', 'author_id' => 8],
        ['title' => 'Cantik Itu Luka', 'author_id' => 9],
        ['title' => 'Pulang', 'author_id' => 10],
        ['title' => 'Hujan Bulan Juni', 'author_id' => 11],
        ['title' => 'Bumi Manusia', 'author_id' => 12],
        ['title' => 'Dilan: Dia adalah Dilanku Tahun 1990', 'author_id' => 13],
        ['title' => 'Critical Eleven', 'author_id' => 14],
        ['title' => 'Di Sini Cinta Pertama Kali Bersemi', 'author_id' => 15],
    ]);
}


}
