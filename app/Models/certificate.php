<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'Pays',
        'Nom_Orga',
        'email_server',
        'Numero_serie',
        'DteOrigin',
        'Dtefin'
        
    ];
}
