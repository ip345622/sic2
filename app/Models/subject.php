<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unit;


class subject extends Model
{
    use HasFactory;
    protected $fillable=['name_subject','total_hours','objective'];

    // Establecer una relacion
    public function units(): \Illuminate\Database\Eloquent\Relations\HasMany
{
    return $this->hasMany(Unit::class);
}
    
}
