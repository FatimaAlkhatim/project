<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

use App\Models\Met;


class Metels extends Model
{
    use HasFactory;

    protected $fillable = [
        'image' , '	location ' , 'met_id' ,  'production_quantity','client_id',
    ];
    
    public function client()
    {
        return  $this->hasOne(Client::class);
    }

    public function met()
{
    return  $this->hasMany(Met::class);
}


    

}
