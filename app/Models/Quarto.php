<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//use App\Models\quarto;

class Quarto extends Model
{
    //use HasFactory;
    //protected $fillable = ['quarto'];
    protected $fillable = ['name','price','image','description'];
    protected $table = 'quartos';
}
