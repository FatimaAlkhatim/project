<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;




class Metels extends Model
{
    use HasFactory;

    protected $fillable = [
        'image' , '	location ' , 'metels_type' ,  'production_quantity','client_id',
    ];
    
    public function client()
    {
        return  $this->hasOne(Client::class);
    }

    

    

}
