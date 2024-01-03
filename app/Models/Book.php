<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    public function Categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function Author()
    {
        return $this->belongsTo(Author::class);
    }
}
