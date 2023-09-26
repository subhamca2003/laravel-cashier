<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function processCheckout(Request $request)
    {
        // Validate the request
        $request->validate([
            'product_name' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        // Process the payment using Laravel Cashier
        $user = $request->user();
        $user->charge($request->input('amount') * 100, [ // Multiply by 100 to convert to cents
            'currency' => 'USD',
            'source' => 'tok_visa',
            'description' => $request->input('product_name'),
        ]);

        

        // Redirect or return a success response
        return redirect()->route('checkout-success');
    }
}
