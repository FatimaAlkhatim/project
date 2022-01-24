<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reseivable extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','national' , 'iphone' , 'location','state' , 'local' , 'status', 'reseivable_type','image'
     ];
}
