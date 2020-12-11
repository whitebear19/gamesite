<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Auth;
use App\User;

class PayPalController extends Controller
{
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function payment(Request $request)
    {
        $data = [];
        $price = $request->get('price');
        
        $data['items'] = [
            [
                'name' => 'I-Oasis.fr',
                'price' => $price,
                'desc'  => 'Payment from I-Oasis.fr',
                'qty' => 1
            ]
        ];
  
        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('paypal.success');
        $data['cancel_url'] = route('paypal.cancel');
        $data['total'] = $price;
                
        $provider = new ExpressCheckout;
  
        $response = $provider->setExpressCheckout($data);
  
        $response = $provider->setExpressCheckout($data, true);
  
        return redirect($response['paypal_link']);
    }
   
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel()
    {        
        Session::flash('success', 'Your payment is canceled.'); 
        return redirect('/subscription');
    }
  
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request)
    {
        $response = $provider->getExpressCheckoutDetails($request->token);
  
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            $user = Auth::user();
            $user->paid = "1";
            $user->save();    
            Session::flash('success', 'Payment successful!');      
            return back();
        }
        Session::flash('success', 'Something wrong. please try again!'); 
        return redirect('/subscription');
    }
}