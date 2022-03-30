<?php

namespace App\Models;
use App\Models\Metels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Met extends Model
{
    use HasFactory;
    protected $fillable = [
        'met_name','met_price'
      ];

    public function metel()
      {
          return  $this->hasMany(Metels::class);
      }
}
