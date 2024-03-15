<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MedicineCreateRequest;
use App\Repositories\MedicinesRepository;
use Illuminate\Http\JsonResponse;

class MedicineController extends Controller
{
    private $medicinesRepository;

    public function __construct()
    {
        $this->medicinesRepository = new MedicinesRepository();
    }
    
    //store
    public function store(MedicineCreateRequest $request): JsonResponse
    {
        $validatedRequest = $request->validated();
        $this->medicinesRepository->create($validatedRequest);
        
        return response()->json(['message' => 'Medicine added successfully']);
    }

    //update 
    public function update(MedicineCreateRequest $request): JsonResponse
    {
        $validatedRequest = $request->validated();
        $medicineId = $request->route('id');
        $this->medicinesRepository->update($validatedRequest, $medicineId);

        return response()->json(['message' => 'Medicine updated successfully']);
    }

    //delete
    public function delete($id): JsonResponse
    {
        $this->medicinesRepository->remove($id);

        return response()->json(['message' => 'Medicine removed successfully']);
    }
    
}
