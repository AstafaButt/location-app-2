<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'province_id', 'latitude', 'longitude'];


    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
