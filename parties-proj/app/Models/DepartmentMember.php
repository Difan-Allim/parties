<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentMember extends Model
{
    use HasFactory;

    protected $fillable = ['department_id', 'member_id', 'join_date'];

    protected $table = 'department_member';

    public $timestamps = false;
}
