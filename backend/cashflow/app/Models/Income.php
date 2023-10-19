<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Income extends Model
{
    use HasFactory;

    protected $primaryKey = 'income_id';

    public $timestamps = false; 

    protected $fillable = [
        'income_date',
        'income_motif',
        'income_amount',
        'income_unite',
        'customer_id'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function expenses(){
        return $this->belongsToMany(Expense::class, 'income_expenses', 'expense_id', 'income_id')
                    ->withPivot('inc_exp_amount');
    }
}
