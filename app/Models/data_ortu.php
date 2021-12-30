<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\personal_ortu;
use App\Models\siswa;

class data_ortu extends Model
{
    use HasFactory;
    protected $table = 'data_ortu';
    protected $guarded = [];
    public $timestamps = false;
    public function personal_ibu(){
        return $this->belongsTo(personal_ortu::class, 'ibu_id');
    }
    public function personal_ayah(){
        return $this->belongsTo(personal_ortu::class, 'ayah_id');
    }
    public function siswa(){
        return $this->belongsTo(siswa::class, 'siswa_id');
    }
}
