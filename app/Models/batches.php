<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class batches extends Model
{
    use HasFactory;

    protected $table = 'batches';
    protected $connection = 'mysql';

    protected $fillable = [
        'name',
        'date',
        'time',
        'days',
        'duration',
    ];

    public $timestamps = true;
}
