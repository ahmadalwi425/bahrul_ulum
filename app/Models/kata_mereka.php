<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kata_mereka extends Model
{
    use HasFactory;
    protected $table = 'kata_mereka';
    protected $guarded = [];
    public $timestamps = false;
}
