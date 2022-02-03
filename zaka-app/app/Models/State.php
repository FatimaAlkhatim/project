<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\reseivable;
use App\Models\Metels;
use App\Models\Farmerie;
use App\Models\Cattleranch ;

class State extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
    ];
    
    public function client()
    {
        return  $this->hasMany(Client::class);
    }

    public function reseivable()
    {
        return  $this->hasMany(reseivable::class);
    }

    public function  metel()
    {
        return  $this->hasMany( Metels::class);
    }
    public function farmerie()
    {
        return  $this->hasMany( Farmerie::class);
    }
    public function  cattleranch ()
    {
        return  $this->hasMany( Cattleranch ::class);
    }

}
