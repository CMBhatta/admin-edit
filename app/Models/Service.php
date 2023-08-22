<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    const IMAGE_PATH = "public/services/img/";
    protected $fillable = ['photo', 'name','description'];
    protected $appends = ['full_image'];
}
