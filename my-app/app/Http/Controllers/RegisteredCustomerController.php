<?php

namespace App\Http\Controllers;

use App\Models\RegisteredCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RegisteredCustomerController extends Controller
{
    public function customerSignUp(Request $request){

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|unique:registered_customers,email',
            'phone_number'=> 'required|integer',
            'password'   => 'required|string|min:6|confirmed',
            ]);
        
        DB::beginTransaction();
    
        try {
            $newUser = RegisteredCustomer::create([
                'first_name' => $validated['first_name'],
                'last_name'  => $validated['last_name'],
                'email'      => $validated['email'],
                'phone_number'      => $validated['phone_number'],
                'password'   => Hash::make($validated['password']),
            ]);

            DB::commit();

            return redirect()->route('customerSignUp')->with('success', 'Your account has been created successfully!');
        } 
        catch (\Exception $e) {
            DB::rollback();
            
            return redirect()->back()->withErrors(['error' => 'Please try again.']);
        }
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     */
    public function show(RegisteredCustomer $registeredCustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegisteredCustomer $registeredCustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RegisteredCustomer $registeredCustomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegisteredCustomer $registeredCustomer)
    {
        //
    }
}
