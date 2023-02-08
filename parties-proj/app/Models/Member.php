<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['surname','name','patronym','birth_date','social_id'];

    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }
    public function social()
    {
        return $this->belongsTo(Social::class);
    }
}
