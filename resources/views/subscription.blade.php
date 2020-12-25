@extends('layouts.base')

@section('content')
<div class="">
    <div class="main">   
        
        <div class="section_plan section-common ioasis_common_section_back_col">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if(session('success'))    
                            <div class="alert alert-success alert-dismissible login_success_alert" role="alert" style="width:450px;margin:auto;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <span>{{ session('success') }}</span>
                            </div>  
                        @endif
                    </div>
                </div>
            </div>
           
            <div class="container">               
                <div class="row">
                    <div class="col-md-12">                            
                        <div class="text-center membership_area mt-2">
                            @if (Auth::user()->type == '1') 
                                <div class="membership_card mt-2">
                                    <div class="membership_card_header">
                                        I-Oasis Mensual
                                    </div>
                                    <div class="membership_card_body">
                                        <div class="subscription-plan__content--monthly subscription-plan__content" tabindex="-1">
                                            <div class="subscription-plan__price">
                                                <h2 class="subscription-plan__price--primary">
                                                    <b>
                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="5510" data-price-box="product-id-5510">
                                                            <span class="price-container price-final_price tax weee">
                                                                <span id="product-price-5510" data-price-amount="999" data-price-type="finalPrice" class="price-wrapper ">
                                                                    <label class="price">€20</label>
                                                                </span> 
                                                            </span> 
                                                        </div>
                                                    </b> 
                                                    <sup>/{{ __('ioasis.Month') }}</sup>
                                                </h2>
                                                <h3 class="subscription-plan__price--secondary">
                                                    <p style="text-align: left; padding: 10px 10px 0px 10px;">
                                                        <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                        <span class="memebership_item_text">{{ __('ioasis.Exclusive offers') }}</span>
                                                    </p>
                                                    <p style="text-align: left; padding: 0px 10px 0px 10px;">
                                                        <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                        <span class="memebership_item_text">{{ __('ioasis.Access to skills monitoring') }}</span>
                                                    </p>  
                                                    <p style="text-align: left; padding: 0px 10px 0px 10px;">
                                                        <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                        <span class="memebership_item_text">{{ __('ioasis.Access to the i-Oasis city') }}</span>
                                                    </p>                                             
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3 mb-3">
                                            <button type="button" class="btn btn_plan btn_subscribe_now" data-price="20"><label class="price">{{ __('ioasis.Subscribe Now') }}</label> </button>
                                            @if (Auth::user()->company_plan == "20")
                                                <p class="mt-3 alert_current_plan">{{ __('ioasis.Current Plan') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="membership_card mt-2">                               
                                    <div class="membership_card_header">
                                    I-Oasis <span style="color: #ca5050;font-weight:600;">{{ __('ioasis.Annual') }}</span> 
                                    </div>
                                    <div class="membership_card_body">
                                        <div class="subscription-plan__content--monthly subscription-plan__content" tabindex="-1">
                                            <div class="subscription-plan__price">
                                                <h2 class="subscription-plan__price--primary">
                                                    <b>
                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="5510" data-price-box="product-id-5510">
                                                            <span class="price-container price-final_price tax weee">
                                                                <span id="product-price-5510" data-price-amount="999" data-price-type="finalPrice" class="price-wrapper ">
                                                                    <label class="price">€<span>15</label></span>
                                                                </span> 
                                                            </span> 
                                                        </div>
                                                    </b> 
                                                    <sup>/{{ __('ioasis.Month') }}</sup>
                                                </h2>
                                                <h3 class="subscription-plan__price--secondary">
                                                    <p style="text-align: left; padding: 10px 10px 0px 10px;">
                                                        <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                        <span class="memebership_item_text">{{ __('ioasis.Exclusive offers') }}</span>
                                                    </p>
                                                    <p style="text-align: left; padding: 0px 10px 0px 10px;">
                                                        <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                        <span class="memebership_item_text">{{ __('ioasis.Access to skills monitoring') }}</span>
                                                    </p>   
                                                    <p style="text-align: left; padding: 0px 10px 0px 10px;">
                                                        <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                        <span class="memebership_item_text">{{ __('ioasis.Access to the i-Oasis city') }}</span>
                                                    </p>                                               
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3 mb-3">
                                            <button type="button" class="btn btn_plan btn_subscribe_now" data-price="15"><label class="price">{{ __('ioasis.Subscribe Now') }}</label> </button>
                                            @if (Auth::user()->company_plan == "15")
                                                <p class="mt-3 alert_current_plan">{{ __('ioasis.Current Plan') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @elseif(Auth::user()->type == '2')
                                <div class="membership_card mt-2">
                                    <div class="membership_card_header">
                                        I-Oasis Mensual
                                    </div>
                                    <div class="membership_card_body">
                                        <div class="subscription-plan__content--monthly subscription-plan__content" tabindex="-1">
                                            <div class="subscription-plan__price">
                                                <h2 class="subscription-plan__price--primary">
                                                    <b>
                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="5510" data-price-box="product-id-5510">
                                                            <span class="price-container price-final_price tax weee">
                                                                <span id="product-price-5510" data-price-amount="999" data-price-type="finalPrice" class="price-wrapper ">
                                                                    <label class="price">€10</label>
                                                                </span> 
                                                            </span> 
                                                        </div>
                                                    </b> 
                                                    <sup>/{{ __('ioasis.Month') }}</sup>
                                                </h2>
                                                <h3 class="subscription-plan__price--secondary">
                                                    <p style="text-align: left; padding: 10px 10px 0px 10px;">
                                                        <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                        <span class="memebership_item_text">{{ __('ioasis.Pack 20 logins') }} </span>
                                                    </p>                                   
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3 mb-3">
                                            <button type="button" class="btn btn_plan btn_subscribe_now" data-plan="20" data-price="10"><label class="price">{{ __('ioasis.Subscribe Now') }}</label> </button>
                                            @if (Auth::user()->company_plan == "20")
                                                <p class="mt-3 alert_current_plan">{{ __('ioasis.Current Plan') }}</p>
                                            @endif                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="membership_card mt-2">
                                    <div class="membership_card_header">
                                        I-Oasis Mensual
                                    </div>
                                    <div class="membership_card_body">
                                        <div class="subscription-plan__content--monthly subscription-plan__content" tabindex="-1">
                                            <div class="subscription-plan__price">
                                                <h2 class="subscription-plan__price--primary">
                                                    <b>
                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="5510" data-price-box="product-id-5510">
                                                            <span class="price-container price-final_price tax weee">
                                                                <span id="product-price-5510" data-price-amount="999" data-price-type="finalPrice" class="price-wrapper ">
                                                                    <label class="price">€20</label>
                                                                </span> 
                                                            </span> 
                                                        </div>
                                                    </b> 
                                                    <sup>/{{ __('ioasis.Month') }}</sup>
                                                </h2>
                                                <h3 class="subscription-plan__price--secondary">
                                                    <p style="text-align: left; padding: 10px 10px 0px 10px;">
                                                        <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                        <span class="memebership_item_text">{{ __('ioasis.Pack 50 logins') }}</span>
                                                    </p>                                   
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3 mb-3">
                                            <button type="button" data-plan="50" class="btn btn_plan btn_subscribe_now" data-price="20"><label class="price">{{ __('ioasis.Subscribe Now') }}</label> </button>
                                            @if (Auth::user()->company_plan == "50")
                                                <p class="mt-3 alert_current_plan">{{ __('ioasis.Current Plan') }}</p>
                                            @endif    
                                        </div>
                                    </div>
                                </div>
                                <div class="membership_card mt-2">
                                    <div class="membership_card_header">
                                        I-Oasis Mensual
                                    </div>
                                    <div class="membership_card_body">
                                        <div class="subscription-plan__content--monthly subscription-plan__content" tabindex="-1">
                                            <div class="subscription-plan__price">
                                                <h2 class="subscription-plan__price--primary">
                                                    <b>
                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="5510" data-price-box="product-id-5510">
                                                            <span class="price-container price-final_price tax weee">
                                                                <span id="product-price-5510" data-price-amount="999" data-price-type="finalPrice" class="price-wrapper ">
                                                                    <label class="price">€30</label>
                                                                </span> 
                                                            </span> 
                                                        </div>
                                                    </b> 
                                                    <sup>/{{ __('ioasis.Month') }}</sup>
                                                </h2>
                                                <h3 class="subscription-plan__price--secondary">
                                                    <p style="text-align: left; padding: 10px 10px 0px 10px;">
                                                        <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                        <span class="memebership_item_text">{{ __('ioasis.Pack unlimited logins') }}</span>
                                                    </p>                                   
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3 mb-3">
                                            <button type="button" data-plan="1000" class="btn btn_plan btn_subscribe_now" data-price="30"><label class="price">{{ __('ioasis.Subscribe Now') }}</label> </button>
                                            @if (Auth::user()->company_plan == "1000")
                                                <p class="mt-3 alert_current_plan">{{ __('ioasis.Current Plan') }}</p>
                                            @endif    
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>                   
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <a href="/" class="btn btn_plan">{{ __('ioasis.Maybe later') }}</a>
                    </div>
                </div>
            </div> 
                      
        </div>
        
        <div class="section_pay section-common ioasis_common_section_back_col">
            <div class="container">               
                <div class="row">
                    <div class="col-md-12">
                        <div class="pay_container">
                            <div class="pay_header">
                                <button class="btn-transparent btn_back_subscription">
                                    <i class="far fa-hand-point-left"></i> {{ __('ioasis.Back') }}
                                </button>
                                <h3 class="fs-20 mb-4 text-orange mt-4">{{ __('ioasis.Select Payment Method') }}</h3>
                                <label class="btn_radio_container">PayPal
                                    <input type="radio" class="select_payment" name="type" value="1">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="btn_radio_container">Credit card
                                    <input type="radio" class="select_payment" name="type" value="2">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="pay_body pay_stripe mt-5">
                                <form 
                                    role="form" 
                                    action="{{ route('stripe.post') }}" 
                                    method="post" 
                                    class="require-validation"
                                    data-cc-on-file="false"
                                    data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                    id="payment-form">
                                    @csrf
                                    <div class="form-group required">
                                        <input type="text" class="form-control" placeholder="Name of Card" size="4">
                                    </div>
                                    <div class="form-group required">
                                        <input type="text" autocomplete='off' size="20" class="form-control card-number" placeholder="Card Number">
                                    </div>
                                    <div class="form-group">                                    
                                        <div class="row">
                                            <div class="col-md-4 form-group cvc required">
                                                <label for="" class="text-white">CVC</label>
                                                <input type="text" class="form-control card-cvc" placeholder="ex.311" size='4'>
                                            </div>
                                            <div class="col-md-4 form-group expiration required">
                                                <label for="" class="text-white">{{ __('ioasis.Expiration Month') }}</label>
                                                <input type="text" class="form-control card-expiry-month" placeholder="MM" size='2'>
                                            </div>
                                            <div class="col-md-4 form-group expiration required">
                                                <label for="" class="text-white">{{ __('ioasis.Expiration Year') }}</label>
                                                <input type="text" class="form-control card-expiry-year" placeholder="YYYY" size='4'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='form-row row'>
                                        <div class='col-md-12 error form-group hide'>
                                            <div class='alert-danger alert'>{{ __('ioasis.Please correct the errors and try
                                                again.') }}</div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center mt-5">
                                        <button type="submit" class="btn btn_plan">{{ __('ioasis.Pay Now') }} €<span class="btn_pay_now_price"></span></button>
                                    </div>
                                    <input type="hidden" value="" name="price" class="pay_price">
                                    <input type="hidden" value="" name="plan" class="pay_plan">
                                    <input type="hidden" name="where" value="s">
                                </form>
                            </div>
                            <div class="pay_body pay_paypal mt-5">    
                                <form 
                                    role="form" 
                                    action="{{ route('paypal.post') }}" 
                                    method="post"                                     
                                    id="paypal-form">
                                    @csrf                            
                                    <div class="form-group text-center mt-5">
                                        <button type="submit" class="btn btn_plan">{{ __('ioasis.Pay Now') }} €<span class="btn_pay_now_price"></span></button>
                                    </div>
                                    <input type="hidden" value="" name="price" class="pay_price">
                                    <input type="hidden" value="" name="plan" class="pay_plan">
                                    <input type="hidden" name="where" value="s">
                                </form>
                            </div>
                        </div>
                    </div>                   
                </div>               
            </div>            
        </div>
    </div>
</div>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
<script type="text/javascript">
$(function() {
   
    var $form         = $(".require-validation");
   
    $('form.require-validation').bind('submit', function(e) {
        var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
  
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
   
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
  
  });
  
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
               
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
   
});
</script>
@endsection