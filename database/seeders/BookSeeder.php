<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pemrograman = Category::where('name', 'Pemrograman')->first();
        $novel = Category::where('name', 'Novel')->first();
        $bisnis = Category::where('name', 'Bisnis & Keuangan')->first();

        Book::create([
            'category_id' => $pemrograman->id,
            'title' => 'Belajar Java 90 Hari',
            'author_name' => 'B',
            'price' => 85000,
        ]);

        Book::create([
            'category_id' => $pemrograman->id,
            'title' => 'Fundamental Pemrogramman',
            'author_name' => 'B',
            'price' => 72000,
        ]);

        Book::create([
            'category_id' => $novel->id,
            'title' => 'despite everything, it-s still you',
            'author_name' => 'B',
            'price' => 68000,
        ]);

        Book::create([
            'category_id' => $novel->id,
            'title' => 'do people really can change',
            'author_name' => 'B',
            'price' => 64000,
        ]);

        Book::create([
            'category_id' => $bisnis->id,
            'title' => 'big money never comes clean',
            'author_name' => 'B',
            'price' => 110000,
        ]);

        Book::create([
            'category_id' => $bisnis->id,
            'title' => 'we never lack of money but souls',
            'author_name' => 'B',
            'price' => 98000,
        ]);
    }
}
