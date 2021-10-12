<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table="profil";

    protected $fillable = [
        'id',
        'profil_sekolah',
        'motto_sekolah',
        'visi_sekolah',
        'misi_sekolah',
        'tujuan_sekolah',
    ];
}