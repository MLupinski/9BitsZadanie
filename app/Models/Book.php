<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'author', 'publishing_house', 'publishing_year'
    ];

    public function index()
    {
        return DB::table('books')->Paginate(10);
    }

    public function show($id)
    {
        return DB::table('books')->where('ID', '=', $id)->first();
    }

    public function edit($id, $data) 
    {
        DB::table('books')->where('ID', '=', $id)->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'author' => $data['author'],
            'publishing_house' => $data['publishing_house'],
            'publishing_year' => $data['publishing_year']
        ]);
    }
}