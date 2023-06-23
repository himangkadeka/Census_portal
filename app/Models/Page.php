<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable= ['mainmenuid','submenuid','pagename','slug','meta','content','priority','isactive'];
}
