<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cources extends Model
{
    use HasFactory;

    protected $table = 'cources';
    protected $connection = 'mysql';

    protected $fillable = [
        'name',
        'fees',
        'file',
        'seats',
        'desc',
        'duration',
        'syllabus',
        'tools',
        'pdf',
        'pre',
        'for',
        'lang',
    ];

    public $timestamps = true;
}
