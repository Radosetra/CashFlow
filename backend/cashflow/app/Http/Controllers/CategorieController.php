<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Limite;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Categorie::all();

        $formatedData = [];

        foreach($categories as $categorie){
            $limite = Limite::find($categorie->limite_id);
            $formatedCategorie = [
                'categorie_id' => $categorie->categorie_id,
                'categorie_descri' => $categorie->categorie_descri,
                'limite' => $limite
            ];

            $formatedData[] = $formatedCategorie;
        }

        return new JsonResponse([
            'data' => $formatedData,
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
            $data = $request->validate([
                'categorie_id' => 'required',
                '1' => 'required',
                'limite_id' => 'required',
            ]);
    
            $categorie = Categorie::create($data);
    
            return new JsonResponse([
                'data' => $categorie
            ]);
        } catch (Exception $e) {
            return new JsonResponse([
                'error' => $e->getMessage(),
            ]);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
            $data = $request->validate([
                'categorie_descri' => 'required',
                'limite_id' => 'required',
            ]);
    
            $categorie = Categorie::findOrFail($id);
            $categorie->fill($data);
            $categorie->save();
    
            return new JsonResponse([
                'data' => $categorie
            ]);
        } catch (Exception $e) {
            return new JsonResponse([
                'error' => $e->getMessage(),
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
    
            $categorie = Categorie::findOrFail($id);
            $categorie->delete();
    
            return new JsonResponse([
                'message' => 'Deleted successfully'
            ]);
        } catch (Exception $e) {
            return new JsonResponse([
                'error' => $e->getMessage(),
            ]);
        }
    }
}
