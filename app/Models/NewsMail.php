<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsMail extends Model
{
    use HasFactory;

    public $fillable = ['email','id','created_at','updated_at'];
}
