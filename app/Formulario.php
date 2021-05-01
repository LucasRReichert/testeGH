<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Formulario extends Model
{
    public $table = "formulario";
    protected $fillable = ['name', 'telephone', 'email'];
}
