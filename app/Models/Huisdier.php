<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huisdier extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $guarded = []; 
    protected $table = "huisdieren";

    public function Soort(){
        return $this->belongsTo("\App\Models\SoortHuisdier", "soort", "soort");
    }

    public function Eigenaar(){
        return $this->belongsTo("\App\Models\User", 'user_id', 'id');
    }
}
