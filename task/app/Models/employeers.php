<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employeers extends Model
{
    use HasFactory;
    protected $table = 'employeers';
    protected $fillable = ['name', 'email', 'phone', 'salary', 'department'];
}
