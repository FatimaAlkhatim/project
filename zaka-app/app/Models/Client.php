<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Farmerie;
use App\Models\Cattleranch;
use App\Models\Metels;
use App\Models\State;
use App\Models\Local;




class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','national' , 'iphone' , 'state' , 'local' , 'client_type','state_id' , 'local_id', 
     ];
    
     public function farmerie()
     {
         return  $this->hasMany(Farmerie::class);
     }

     public function cattleranche()
     {
         return  $this->hasMany(Cattleranch::class);
     }
     
     public function metel()
     {
         return  $this->hasMany(Metels::class);
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
