<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['title'];
    
    public function member()
    {
        return $this->belongsToMany(Member::class)->withPivot('join_date');
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }
}
