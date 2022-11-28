<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected $table = 'todo';
    protected $fillable =[
        'Name_Task'
       
    ];

    public $timestamps = true;
}
