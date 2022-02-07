<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\reseivable;


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



}
