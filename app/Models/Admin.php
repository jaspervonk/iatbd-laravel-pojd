<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = "admins";

    public function Eigenaar(){
        return $this->hasOne("\App\Models\User", "id", "admin");
    }
}
