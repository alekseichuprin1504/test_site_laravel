<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = ['name', 'text', 'image', 'created_at', 'updated_at'];
}
