<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Exception;
use Illuminate\Http\JsonResponse;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $customers = Customer::all();
        return new JsonResponse(['data' => $customers]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validedData = $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_password' => 'required'
        ]);

        $customer = Customer::create($validedData);
        return new JsonResponse(['data' => $customer], JsonResponse::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        try {
            $customer = Customer::findOrFail($id);
            return new JsonResponse(['data' => $customer]);
        } catch (ModelNotFoundException $e) {
            return new JsonResponse(['error' => 'Customer not found'], JsonResponse::HTTP_NOT_FOUND);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        // try{
        //     $validedData = $request->validate([
        //         'customer_name' => 'required',
        //         'customer_email' => 'required',
        //         'customer_password' => 'required'
        //     ]);
        // } catch (Exception $e) {
        //     return new JsonResponse([ 'error' => $e->getMessage(), JsonResponse::HTTP_BAD_REQUEST]);
        // }
        

        try{
            $customer = Customer::findOrFail($id);
            $customer->customer_name = $request->customer_name;
            $customer->customer_email = $request->customer_email;
            $customer->customer_password = $request->customer_password;
            $customer->save();
            return new JsonResponse([ 'data' => $customer]);
        } catch(Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], JsonResponse::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try{
            $customer = Customer::findOrFail($id);
            $customer->delete();

            return new JsonResponse(['message' => 'deleted succesfully']);
        } catch(Exception $e) {
            return new JsonResponse(['error' => $e->getMessage()], JsonResponse::HTTP_BAD_REQUEST);
        }
    }
}
