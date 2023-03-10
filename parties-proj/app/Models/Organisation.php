<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    protected $fillable = ['title','holding_date','legal_id'];

    public function departments()
    {
        return $this->hasMany(Department::class);
    }
    public function discounts()
    {
        return $this->belongsToMany(Discount::class);
    }
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
    public function legal()
    {
        return $this->belongsTo(Legal::class);
    }
}
