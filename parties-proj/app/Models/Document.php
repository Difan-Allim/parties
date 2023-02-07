<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = ['title'];
    
    public function purpose()
    {
        return $this->belongsTo(Purpose::class);
    }
    public function organisation()
    {
        return $this->belongsTo(Organisation::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
