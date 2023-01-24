<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'number_partner',
        'name'
    ];

    public function units(){
        return $this->hasMany(Unit::class);
    }
}
