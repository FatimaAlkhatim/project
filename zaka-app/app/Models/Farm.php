<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Cro;
class Farm extends Model
{
    use HasFactory;


    protected $fillable = [
        'projct_id' , 'area','location' , 'client_id','cro_id' , 'irrigate_type' , 'production_quantity','created_at',
    ];
    
    public function client()
    {
        return  $this->hasOne(Client::class);
    }
    public function cro()
{
    return  $this->hasMany(Cro::class);
}

}
