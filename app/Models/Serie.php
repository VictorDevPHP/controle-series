<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder; 
use App\Models\Season;
use App\Models\Episode; 

class Serie extends Model
{
    protected $table = 'series'; 
    protected $fillable = ['nome'];  

    public function temporadas(){
        return $this->HasMany(Season::class, 'series_id', 'id'); 
    }

    protected static function booted(){

        self::addGlobalScope('ordered', function(Builder $queryBuilder){
            $queryBuilder->orderBy('nome'); 
        });
        parent::booted(); 
    }
}
