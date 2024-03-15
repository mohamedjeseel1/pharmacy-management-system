<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerCreateRequest;
use App\Repositories\CustomerRepository;
use Illuminate\Http\JsonResponse;

class CustomerController extends Controller
{
    private $customerRepository;

    public function __construct()
    {
        $this->customerRepository = new CustomerRepository();
    }

    //store
    public function store(CustomerCreateRequest $request)
    {
        $validatedRequest = $request->validated();
        $this->customerRepository->create($validatedRequest);

        return response()->json(['message' => 'Customer added successfully']);
    }

    //update 
    public function update(CustomerCreateRequest $request)
    {
        $validatedRequest = $request->validated();
        $customerId = $request->route('id');
        $this->customerRepository->update($validatedRequest, $customerId);

        return response()->json(['message' => 'Customer updated successfully']);
    }

    //delete
    public function delete($id): JsonResponse
    {
        $this->customerRepository->remove($id);
        
        return response()->json(['message' => 'Customer removed successfully']);
    }
    
}
