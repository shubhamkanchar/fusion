<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    use HasFactory;

    protected $table = 'instructor';
    protected $connection = 'mysql';

    protected $fillable = [
        'name',
        'file',
        'course',
    ];

    public $timestamps = true;
}
