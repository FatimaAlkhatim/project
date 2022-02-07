<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;



class Cattleranch extends Model
{
    use HasFactory;

    protected $fillable = [
        'cattleranch_type' , 'cattleranch_amount ' ,  'location' , 'client_id', 
    ];
    
    public function client()
    {
        return  $this->hasOne(Client::class);
    }
    
   
}
