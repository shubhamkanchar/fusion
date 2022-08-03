<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pdfs extends Model
{
    use HasFactory;

    protected $table = 'pdfs';
    protected $connection = 'mysql';

    protected $fillable = [
        'course_id',
        'name',
        'file',
    ];

    public $timestamps = true;
}
