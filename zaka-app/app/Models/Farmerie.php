<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Crope;

class Farmerie extends Model
{
    use HasFactory;
    
protected $fillable = [
    'projct_id' , 'area','location' , 'client_id','crope_id' , 'irrigate_type' , 'production_quantity','created_at',
];

public function client()
{
    return  $this->hasOne(Client::class);
}
public function crope()
{
    return  $this->hasMany(Crope::class);
}

}
