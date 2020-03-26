<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table 	  = 'tamu';
    protected $primaryKey = 'id';
    protected $fillable	  = ['id','nama','keperluan','no_hp','created_at','updated_at'];

}
