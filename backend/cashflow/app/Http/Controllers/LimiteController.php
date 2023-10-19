<?php

namespace App\Http\Controllers;

use App\Models\Limite;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LimiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $limites = Limite::all();

        return new JsonResponse(['data' => $limites]);
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
            $data = $request->validate([
                // 'limite_id' => 'required',
                'limite_date' => 'required',
                'limite_date_end' => 'required',
                'limite_amount' => 'required',
            ]);
    
            $limite = Limite::create($data);
    
            return new JsonResponse([
                'data' => $limite, JsonResponse::HTTP_CREATED
            ]);
        } catch(Exception $e) {
            return new  JsonResponse([
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
        try {
            $limite = Limite::findOrFail($id);

            return new JsonResponse([
                'data' => $limite,
                JsonResponse::HTTP_FOUND
            ]);
        } catch (Exception $e) {
            return new JsonResponse([
                'error' => $e->getMessage()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
        try {
            $limite = Limite::findOrFail($id);

            $limite->limite_date = $request->limite_date ;
            $limite->limite_date_end = $request->limite_date_end ;
            $limite->limite_amount = $request->limite_amount ;
            $limite->save();

            return new JsonResponse([
                'data' => $limite,
                JsonResponse::HTTP_OK
            ]);
        } catch (Exception $e) {
            return new JsonResponse([
                'error' => $e->getMessage(),
                JsonResponse::HTTP_BAD_REQUEST
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        try {
            $limite = Limite::findOrFail($id);

            $limite->delete();

            return new JsonResponse([
                'data' => 'deleted succesfully',
                JsonResponse::HTTP_OK
            ]);
        } catch (Exception $e) {
            return new JsonResponse([
                'error' => $e->getMessage(),
                JsonResponse::HTTP_BAD_REQUEST
            ]);
        }
    }
}
