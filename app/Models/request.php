<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class request extends Model
{
    use HasFactory;

    protected $table = 'request';
    protected $connection = 'mysql';

    protected $fillable = [
        'name',
        'email',
        'course',
        'message',
        'mobile',
        'type',
        'status'
    ];

    public function getStatusAttribute($value)
    {
        return $value == 0 ? 'New' : 'Completed';
    }

    public $timestamps = true;
}
