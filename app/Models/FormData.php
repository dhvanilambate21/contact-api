<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{   
    // use HasApiTokens;
    protected $table = "form_data";
    protected $fillable = ['website', 'data'];
}
