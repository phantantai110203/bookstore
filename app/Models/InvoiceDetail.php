<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvoiceDetail extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    public function Book(){
        return $this->belongsTo(Book::class);
    }
    public function Invoice(){
        return $this->belongsTo(Invoice::class);
    }

}
