<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Farmerie;

class Crope extends Model
{
    use HasFactory;

    protected $fillable = [
        'crope_name','crope_price'
      ];

      public function farmerie()
      {
          return  $this->hasMany(Farmerie::class);
      }
 
    
      
      
}
