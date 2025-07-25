<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ninja;

class Dojo extends Model
{
    protected $fillable = ["name","description","location"];
    /** @use HasFactory<\Database\Factories\DojoFactory> */
    use HasFactory;

    public function ninja (){
        return $this->hasMany(Ninja::class);
    }
}
