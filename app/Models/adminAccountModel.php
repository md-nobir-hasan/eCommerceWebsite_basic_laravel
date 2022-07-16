<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminAccountModel extends Model
{
    use HasFactory;
    protected $table = 'users';
    public $timestamp = false;

}
