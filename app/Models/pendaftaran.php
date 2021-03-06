<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\lembaga;

class pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran';
    protected $guarded = [];
    public $timestamps = false;
    public function lembaga(){
        return $this->belongsTo(lembaga::class, 'id_lembaga');
    }
}
