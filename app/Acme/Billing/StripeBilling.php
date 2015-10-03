<?php namespace  App\Acme\Billing;


use Stripe\Stripe;
use Stripe\Charge;
use Stripe_CardError;
use Config;
use Input;


class StripeBilling implements BillingInterface
{
    
    public function __construct() {
        Stripe::setApiKey(Config::get('stripe.stripe.secret'));
    }
    
    public function charge(array $data) {
        try {

            return Charge::create(['amount' =>Input::get('amount'), 'currency' => 'usd', 'description' => $data['email'], 
                //'card' =>
                 'card' => Input::get('stripeToken')  ]);

                 //, $data['stripeToken'
                 //]
                       }
        catch(Stripe_CardError $e) {
            dd('card was declined');
        }
    }
}
?>