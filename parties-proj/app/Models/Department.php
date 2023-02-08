<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['number','phone_number','address','city_id','organisation_id'];

    public function members()
    {
        return $this->belongsToMany(Member::class);
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
