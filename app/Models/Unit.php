<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'partner_id'
    ];

    public function partner(){
        return $this->belongsTo(Partner::class);
    }
}
