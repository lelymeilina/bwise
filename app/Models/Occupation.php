<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    protected $table = "bw_m_occupations";
    protected $primaryKey = 'id';
    protected $fillable = ['name'];
}
