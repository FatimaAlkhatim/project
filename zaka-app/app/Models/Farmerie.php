<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Farmerie extends Model
{
    use HasFactory;
    
protected $fillable = [
    'projct_id' , 'area','location' , 'crope_type' , 'irrigate_type' , 'state' , 'local', 'production_quantity','production_value'
];

public function client()
{
    return  $this->hasMany(Cient::class);
}
}
