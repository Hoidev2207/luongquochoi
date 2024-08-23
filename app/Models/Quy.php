<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quy extends Model
{
    // Specify the table name if it does not follow Laravel's naming convention
    protected $table = 'quy';

    // Define the fields that can be mass assigned
    protected $fillable = [
        'name', 'description', 'price', 'image'
    ];

    // Optionally, if you want to disable the timestamps
    public $timestamps = true;

    // If your table has timestamps and you want to customize them
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
