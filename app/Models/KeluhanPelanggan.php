<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluhanPelanggan extends Model
{
    use HasFactory;
    protected $table = 'keluhan_pelanggan';
    protected $guarded = ['id'];


    public function scopeDate(Builder $query, $date)
    {
        if($date) {
            $query->whereDate('created_at', $date);
        }

        return $query;
    }
}
