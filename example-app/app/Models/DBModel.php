<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DBModel extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $fillable = ['name', 'task', 'place'];
    protected $dates =  ['start_date', 'end_date', 'create_date'];

}
