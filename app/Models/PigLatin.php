<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PigLatin extends Model
{
    use HasFactory;
    protected $table = 'pig_latin';
    protected $primaryKey = 'id';
}
