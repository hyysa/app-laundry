<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $table = 'tb_pesan';
    protected $fillable = [
        'id',
        'name',
        'email',
        'message',
    ];
}
