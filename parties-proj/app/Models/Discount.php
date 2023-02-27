<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = ['title','event_date','money','count_m','type_id','member_id','user_id'];
    
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function organisations()
    {
        return $this->belongsToMany(Organisation::class);
    }
}
