<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $fillable = [
        "npm",
        "judul",
        "latar_belakang",
        "tujuan_penelitian",
        "manfaat_penelitian",
        "penelitian_terkait",
        "pembimbing1",
        "pembimbing2",
    ];
}
