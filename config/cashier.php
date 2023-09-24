<?php

return [

/*
|--------------------------------------------------------------------------
| Stripe Key
|--------------------------------------------------------------------------
|
| This is your Stripe API key. You can find this in your Stripe Dashboard.
|
*/

'key' => env('STRIPE_KEY'),

/*
|--------------------------------------------------------------------------
| Stripe Secret
|--------------------------------------------------------------------------
|
| This is your Stripe API secret. This is also available in your
| Stripe Dashboard.
|
*/

'secret' => env('STRIPE_SECRET'),

/*
|--------------------------------------------------------------------------
| Stripe Webhooks
|--------------------------------------------------------------------------
|
| Your Stripe webhook secret is used to prevent unauthorized requests to
| your Stripe webhook handling controllers. The webhook secret may be
| obtained from your Stripe dashboard.
|
*/

'webhook' => [
    'secret' => env('STRIPE_WEBHOOK_SECRET'),
],

// ...

];
