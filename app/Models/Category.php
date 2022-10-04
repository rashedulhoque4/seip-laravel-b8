<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $fillable = ['name', 'is_active', 'unit', 'price'];
=======
    
    protected $fillable = ['name', 'is_active'];

>>>>>>> 8c71e4fe4da87e01cacd24dd1bf932a9cef256bd
}
