<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['nama', 'pengarang', 'terbit', 'harga'];
}
