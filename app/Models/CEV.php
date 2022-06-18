<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CEV extends Model
{
    use HasFactory;

    protected $fillable = [
        'NomOrga',
        'IDARTCI',
        'LienDoc',
        'NumDoc',
        'EmailUsager',
        'IDdecachet'


    ];
}
