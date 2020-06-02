<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'contacts', 'created_at', 'updated_at'];
}
