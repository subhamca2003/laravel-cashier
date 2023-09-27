<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Cashier\SubscriptionBuilder;

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

        // Get the authenticated user
        $user = $request->user();

        // Create a new customer for the user
        $user->createOrGetStripeCustomer();

        // Calculate the purchase amount (e.g., $300)
        $purchaseAmount = $request->input('amount') * 100; // Amount in cents (300 dollars * 100 cents per dollar)

        try {
            // Charge the customer for the purchase
            $user->charge($purchaseAmount, [
                'description' => $request->input('product_name'),
            ]);

            // Optionally, you can generate an invoice for the charge
            // Invoice::create([
            //     'customer' => $user->stripe_id,
            //     'amount' => $purchaseAmount,
            //     'currency' => 'USD',
            // ]);

            // Redirect to a success page or return a success response
            return redirect()->route('checkout-success');
        } catch (\Exception $e) {
            // Handle the payment failure
            return redirect()->route('checkout-success')->with('error', $e->getMessage());
        }
        

        // // Redirect or return a success response
        // return redirect()->route('checkout-success');
        // Redirect or return a success response
        return redirect()->route('dashboard');
    }
}
