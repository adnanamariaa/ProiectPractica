<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    // coloanele pe care le putem completa cu create() sau fill()
    protected $fillable = [
        'nume_parinte',
        'prenume_parinte',
        'mail_parinte',
        'phone_parinte',
        'copil_nume',
        'copil_data',
        'locatii',
    ];
}
