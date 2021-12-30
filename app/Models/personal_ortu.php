<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\data_ortu;

class personal_ortu extends Model
{
    use HasFactory;
    protected $table = 'personal_ortu';
    protected $guarded = [];
    public $timestamps = false;
    public function personal_ortu(){
        return $this->hasMany(personal_ortu::class, 'id');
    }
}
