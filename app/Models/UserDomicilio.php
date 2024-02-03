<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDomicilio extends Model
{
    use HasFactory;

    public $table = 'user_domicilios';

    public $fillable = [
        'id',
        'user_id',
        'domicilio',
        'numero_exterior',
        'colonia',
        'cp',
        'ciudad',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class,'user_id','id');
    }
}
