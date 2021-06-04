<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oppas extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "oppassers";

    public function Eigenaar(){
        return $this->belongsTo("\App\Models\User", 'user_id', 'id');
    }
}
