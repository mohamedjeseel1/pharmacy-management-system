<?php


namespace App\Repositories;

use App\Models\Medicine;

class MedicinesRepository
{

    // create
    public function create($data)
    {
        return Medicine::create($data);
    }

    //update
    public function update($data, $id)
    {
        $medicine = Medicine::find($id);
        if (!$medicine) {
            return response()->json(['error' => 'Medicine not found'], 404);
        }
        return $medicine->update($data);
    }

    //delete
    public function remove($id)
    {
        $medicine = Medicine::find($id);
        return $medicine->delete();
    }
    
}