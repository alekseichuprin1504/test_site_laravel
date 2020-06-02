<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
{
    protected $fillable = ['name', 'text', 'logo', 'created_at', 'updated_at'];
}
