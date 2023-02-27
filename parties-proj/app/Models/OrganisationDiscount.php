<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganisationDiscount extends Model
{
    use HasFactory;

    protected $fillable = ['organisation_id', 'discount_id'];

    protected $table = 'organisation_discount';

    public $timestamps = false;
}
