<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_member extends Model
{
    use HasFactory;
    public $table = 'tb_member';
    protected $fillable = ['id','nama','alamat','jenis_kelamin','tlp'];
}
