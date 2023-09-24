<?php

namespace App\Services;

use Laravel\Cashier\Cashier;
use Stripe\PaymentIntent;
use Stripe\Exception\CardException;
use Stripe\Stripe;

class PaymentService
{
    public function __construct()
    {
        Stripe::setApiKey(config('cashier.secret'));
    }

    public function charge($request)
    {
        try {
            return PaymentIntent::create([
                'amount' => $request->amount, // Amount in cents (e.g., $19.99)
                'currency' => 'usd',
                'payment_method' => $request->input('card'), // Card token or payment method ID
                'confirmation_method' => 'automatic',
                'confirm' => true,
            ]);

        } catch (CardException $e) {
            // Handle card errors (e.g., insufficient funds, card declined)
            return redirect()->back()->withErrors(['card' => $e->getMessage()]);
        } catch (\Exception $e) {
            // Handle other exceptions
            return redirect()->back()->withErrors(['general' => $e->getMessage()]);
        }
    }
}
