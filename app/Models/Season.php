<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Episode; 

class Season extends Model
{
    use HasFactory;
    
    public function series(){
        return $this->belongsTo(Season::class); 
    }

    public function episodes(){
        return $this->HasMany(Episodes::class); 
    }
}
