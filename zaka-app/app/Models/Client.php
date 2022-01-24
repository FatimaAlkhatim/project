<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Farmerie;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','national' , 'iphone' , 'state' , 'local' , 'client_type'
     ];
    
     public function farmerie()
     {
         return  $this->belongsTo(Farmerie::class);
     }
     
}
