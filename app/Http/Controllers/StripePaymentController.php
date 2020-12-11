<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use Auth;
use App\User;

class StripePaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));         
        $price = $request->get('price');
        try {
            $temp = Stripe\Charge::create ([
                "amount" => 100 * $price,
                "currency" => "eur",
                "source" => $request->stripeToken,
                "description" => "Payment from I-Oasis.fr" 
            ]);
            
            if($temp->status == "succeeded")
            {  
                $user = Auth::user();
                $user->paid = "1";
                $user->save();    
                Session::flash('success', 'Payment successful!');      
                return back();
            }
            else
            {
                return back();
            }
            
        }
        catch(Exception $e) {           
            return back()->with("error",$e->getMessage()); 
        }
       
    }
}
