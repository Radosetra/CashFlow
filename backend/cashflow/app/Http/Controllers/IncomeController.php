<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Income;
use App\Models\Customer;
use Exception;
use Illuminate\Http\JsonResponse;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $incomes = Income::all();
        return new JsonResponse(['data' => $incomes]);

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            $validedData = $request->validate([
                'income_motif' => 'required',
                'income_amount' => 'required',
                'income_unite' => 'required',
                'customer_id' => 'required',
            ]);

            $income = Income::create($validedData);

            return new JsonResponse([
                'data' => $income, JsonResponse::HTTP_CREATED
            ]);
        } catch( Exception $e){

            return new JsonResponse(['error' => $e->getMessage()]);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        try{
            $income = Income::findOrFail($id);

            return new JsonResponse([
                'data' => $income
            ]);
        } catch( Exception $e){

            return new JsonResponse(['error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        try{
            $income = Income::findOrFail($id);

            $income->income_motif = $request->income_motif;
            $income->income_amount = $request->income_amount;
            $income->income_unite = $request->income_unite;

            $income->save();

            return new JsonResponse([
                'data' => $income, JsonResponse::HTTP_OK
            ]);
        } catch( Exception $e){

            return new JsonResponse(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try{
            $income = Income::findOrFail($id);

            $income->delete();

            return new JsonResponse([
                'message' => 'Deleted successfully'
            ]);
        } catch( Exception $e){

            return new JsonResponse(['error' => $e->getMessage()]);
        }
    }
}
