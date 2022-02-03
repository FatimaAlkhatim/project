<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\State;
use App\Models\Local;




class Metels extends Model
{
    use HasFactory;

    protected $fillable = [
        'image' , '	location ' , 'metels_type' ,  'production_quantity','production_value','client_id','state_id' , 'local_id', 
    ];
    
    public function client()
    {
        return  $this->hasOn(Client::class);
    }

    public function state()
    {
        return  $this->belongsTo(State::class);
    }
    public function local()
    {
        return  $this->belongsTo(Local::class);
    }

    

}
