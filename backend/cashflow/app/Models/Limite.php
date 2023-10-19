<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Limite extends Model
{
    use HasFactory;

    protected $primaryKey = 'limite_id';

    public $timestamps = false;

    protected $fillable = [
        'limite_date',
        'limite_date_end',
        'limite_amount'
    ];

    public function categories()
    {
        return $this->hasMany(Categorie::class);
    }
}
