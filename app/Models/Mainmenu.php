<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mainmenu extends Model
{
    use HasFactory;
    protected $fillable = ['menuhead','priority','isactive'];
}
