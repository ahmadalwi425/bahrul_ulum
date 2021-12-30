<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\menu;

class lembaga extends Model
{
    use HasFactory;
    protected $table = 'lembaga';
    public function menu(){
        return $this->hasMany(menu::class, 'id');
    }
    public $timestamps = false;
}
