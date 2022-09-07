<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Despesa extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['titulo_despesa','quantidade','valor_uni','valor_total', 'evento_origem'];
}
