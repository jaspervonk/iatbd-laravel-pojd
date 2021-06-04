<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aanvraag extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $guarded = []; 
    protected $table = "aanvragen";

    public function HuisdierEigenaar(){
        return $this->hasOne("\App\Models\User", "id", "huisdier_eigenaar");
    }

    public function Huisdier(){
        return $this->hasOne("\App\Models\Huisdier", "id", "huisdier");
    }

    public function Oppas(){
        return $this->hasOne("\App\Models\Oppas", "id", "oppas");
    }
}
