<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $primaryKey = 'categorie_id';
    
    public $timestamps = false;

    protected $fillable = [
        'categorie_descri',
        'limite_id'
    ];

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function limite()
    {
        return $this->belongsTo(Limite::class);
    }
}
