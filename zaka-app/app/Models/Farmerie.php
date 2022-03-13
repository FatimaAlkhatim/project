<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;


class Farmerie extends Model
{
    use HasFactory;
    
protected $fillable = [
    'projct_id' , 'area','location' , 'client_id','crope_type' , 'irrigate_type' , 'production_quantity','created_at',
];

public function client()
{
    return  $this->hasOne(Client::class);
}


}
