<?php


namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository
{

    // create
    public function create($data){
        return Customer::create($data);
    }

    //update
    public function update($data, $id){
        $customer = Customer::find($id);
        if (!$customer) {
            return response()->json(['error' => 'Customer not found'], 404);
        }
        return $customer->update($data);
    }

    //delete
    public function remove($id)
    {
        $customer = Customer::find($id);
        return $customer->delete();
    }
}
