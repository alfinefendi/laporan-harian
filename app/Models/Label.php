<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'label';
    protected $guarded = ['id'];
}
