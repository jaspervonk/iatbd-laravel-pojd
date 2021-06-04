<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "reviews";

    public function Oppas(){
        return $this->hasOne("\App\Models\Oppas", "id", "oppas");
    }

    public function HuisdierEigenaar(){
        return $this->hasOne("\App\Models\user", "id", "huisdier_eigenaar");
    }
}
