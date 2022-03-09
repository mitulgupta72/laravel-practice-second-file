<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutator extends Model
{
    use HasFactory;
    public $table='mutator';
    public $connection='mysql2';
}
