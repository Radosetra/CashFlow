<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $primaryKey = 'expense_id';

    public $timestamps = false;

    protected $fillable = [
        'expense_date',
        'expense_motif',
        'expense_unite',
        'categorie_id'
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function incomes(){
        return $this->belongsToMany(Income::class, 'income_expenses', 'expense_id', 'income_id')
                    ->withPivot('inc_exp_amount');
    }
}
