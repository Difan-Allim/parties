<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
    public function discount()
    {
        return $this->hasMany(Discount::class);
    }
    public function document()
    {
        return $this->hasMany(Document::class);
    }
    public function legal()
    {
        return $this->belongsTo(Legal::class);
    }
}
