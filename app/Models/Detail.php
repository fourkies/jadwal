<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    use HasFactory;

    protected $table = 'detail';

    protected $fillable = [
        'user_id',
        'alamat',
        'no_hp',
    ];
}
