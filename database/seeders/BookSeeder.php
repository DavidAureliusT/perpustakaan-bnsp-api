<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/data/books.csv"), "r");

        $firstline = true;
        while(($data = fgetcsv($csvFile, 5, ",")) !== FALSE) {
            if(!$firstline) {
                Book::create([
                    "title" => $data['1'],
                    "author" => $data['2'],
                    "rating" => $data['3'],
                    "total_pages" => $data['7'],
                    "isbn" => $data['4'],
                    "publisher" => $data['11'],
                ]);
            }
        }

        fclose($csvFile);
    }
}
