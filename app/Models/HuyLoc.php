<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HuyLoc extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'huyloc';

    // Define the primary key for the model
    protected $primaryKey = 'id';

    // Define which attributes are mass assignable
    protected $fillable = [
        'name',
        'description',
        'pricedecimal',
        'image',
    ];

    // Define which attributes should be cast to native types
    protected $casts = [
        'pricedecimal' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
