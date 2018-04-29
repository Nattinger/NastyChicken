<?php
require_once("stripe/init.php");

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_X40BhiftdL5dtLimzk7hVjYX");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $argv[1];
$charge = \Stripe\Charge::create([
    'amount' => 999,
    'currency' => 'usd',
    'description' => 'Example charge',
    'source' => $token,
]);