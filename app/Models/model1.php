<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model1 extends Model
{
    use HasFactory;
    protected $table = 'products_details';
    public $timestamp = false;

}
