<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students_has_activities extends Model
{
    use HasFactory;
    protected $fillable = ['student_id','activities_id'];
}
