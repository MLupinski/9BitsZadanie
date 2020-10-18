<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('local_public')->get("storage/books.json");
        $data = json_decode($json);

        foreach($data as $obj) {
            Book::create([
                'title' => $obj->title,
                'description' => $obj->description,
                'author' => $obj->author,
                'publishing_house' => $obj->publishing_house,
                'publishing_year' => $obj->publishing_year
            ]);
        }
    }
}
