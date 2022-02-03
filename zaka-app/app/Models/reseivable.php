<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\State;
use App\Models\Local;
class reseivable extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','national' , 'iphone' , 'location' , 'status', 'reseivable_type','image','state_id' , 'local_id'
     ];
     public function state()
     {
         return  $this->belongsTo(State::class);
     }
 
     public function local()
     {
         return  $this->belongsTo(Local::class);
     }
     
    
}
