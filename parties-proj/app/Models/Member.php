<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['title'];
    
    public function department()
    {
        return $this->belongsToMany(Department::class);
    }
    public function social()
    {
        return $this->belongsTo(Social::class);
    }
}
