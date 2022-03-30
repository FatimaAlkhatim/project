<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Farm;

class Cro extends Model
{
    use HasFactory;


    protected $fillable = [
        'cro_name','cro_price'
      ];

      public function farm()
      {
          return  $this->hasMany(Farm::class);
      }
 
}
