<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RegisteredCustomer extends Model
{
    protected $fillable = ['first_name','last_name', 'email','phone_number','password'];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'registered_customer_id'); 
    }

    public function show(RegisteredCustomer $customer)
    {
        return view('customers.show', compact('customer'));
    }
    
}

