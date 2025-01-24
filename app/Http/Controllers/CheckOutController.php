<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function payment(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env("STRIPE_SECRET_KEY"));
        $successUrl = route('stripe.payment.success')."?session_id={CHECKOUT_SESSION_ID}";
       $response =  $stripe->checkout->sessions->create([
        'success_url' => $successUrl,
        'line_items' => [
            [
            'price_data' => [
                "currency" => "USD",
                "product_data" => ["name"=> "shoe"],
                "unit_amount" => 2 * 100,

            ],
            'quantity' => 1,
            ],
        ],
        'mode' => 'payment',
        ]);
        return redirect($response['url']);
    }

    public function paymentSuccess(Request $request)
    {
        dd($request->all());
    }
}
