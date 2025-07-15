<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dojo;

class Ninja extends Model
{
    //to protect the app from mass-assignment malecious action
    protected $fillable = ["name","skill","bio","dojo_id"];
    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;
    public function dojo (){
        return $this->belongsTo(Dojo::class);
    }
}
