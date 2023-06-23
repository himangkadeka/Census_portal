<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class submenu extends Model
{
    use HasFactory;
   protected $fillable = ['mainmenuid','submenuhead','priority','isactive'];
}
