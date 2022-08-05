<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Laravelcrud1Controller;


class laravelcrud1 extends Model
{
    use HasFactory;
    protected $table = 'laravelcrud1s';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone'
    ];
}
