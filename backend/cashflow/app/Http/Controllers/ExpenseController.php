<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Expense;
use App\Http\Requests\StoreExpenseRequest;
use App\Http\Requests\UpdateExpenseRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

use App\Models\Income;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $expenses = Expense::all();

        return new JsonResponse([
            "data" => $expenses,
            JsonResponse::HTTP_OK
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            $jsonRes = $request->json()->all();
            // FORMAT EXPENSE DATA
            $expData = [
                'expense_date' => $jsonRes['expense_date'],
                'expense_motif'=> $jsonRes['expense_motif'],    
                'expense_unite'=> $jsonRes['expense_unite'],
                'categorie_id'=> $jsonRes['categorie_id']
            ];

            $incomes = $jsonRes['incomes'];


            // $validateData = $request->validate([
            //     'expense_date' => 'required',
            //     'expense_motif' => 'required',
            //     'expense_unite' => 'required',
            //     'categorie_id' => 'required',
            //     'incomes' => 'required',
            // ]);

            // var_dump($request->json()->all()) ;

            $expense = Expense::create($expData);

            foreach($incomes as $income){
                $expense->incomes()->attach($income['id'],['inc_exp_amount' => $income['amount']]);
            }

            return new JsonResponse([
                'data' => $expense,
                JsonResponse::HTTP_CREATED
            ]);
        } catch (Exception $e) {
            return new JsonResponse([
                'error' => $e->getMessage()
            ]);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpenseRequest $request, Expense $expense)
    {
        //
        try {
            $expense->save($request->all());
            return new JsonResponse([
                'data' => $expense,
            ]);
        } catch (Exception $e) {
            return new JsonResponse([
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        //
        try {
            $expense->delete();
            return new JsonResponse([
                'message' => 'deleted succesfully',
            ]);
        } catch (Exception $e) {
            return new JsonResponse([
                'error' => $e->getMessage()
            ]);
        }
    }
}
