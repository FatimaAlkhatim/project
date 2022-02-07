<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\reseivable;

class Selectt extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount', 'reseivable_id'
      ];
      
      public function reseivable()
      {
          return  $this->hasMany(reseivable::class);
      }
}
