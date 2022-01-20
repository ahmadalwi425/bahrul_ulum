<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\lembaga;
use App\Models\data_ortu;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $guarded = [];
    public $timestamps = false;
    public function lembaga(){
        return $this->belongsTo(lembaga::class, 'lembaga_id');
    }
    public function data_ortu(){
        return $this->hasMany(data_ortu::class, 'nisn');
    }
}
