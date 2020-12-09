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
                        <div class="text-center mt-2">
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
                                                                <span class="price">€20</span>
                                                            </span> 
                                                        </span> 
                                                    </div>
                                                </b> 
                                                <sup>/Month</sup>
                                            </h2>
                                            <h3 class="subscription-plan__price--secondary">
                                                <p style="text-align: left; padding: 10px 10px 0px 10px;">
                                                    <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                    <span class="memebership_item_text">Exclusive offers</span>
                                                </p>
                                                <p style="text-align: left; padding: 0px 10px 0px 10px;">
                                                    <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                    <span class="memebership_item_text">Access to quizzes</span>
                                                </p>                                               
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="text-center mt-3 mb-3">
                                        <button type="button" class="btn btn_plan btn_subscribe_now" data-price="20"><span class="price">Subscribe Now</span> </button>
                                    </div>
                                </div>
                            </div>
                            <div class="membership_card mt-2">                               
                                <div class="membership_card_header">
                                   I-Oasis <span style="color: #ca5050;font-weight:600;">Annual</span> 
                                </div>
                                <div class="membership_card_body">
                                    <div class="subscription-plan__content--monthly subscription-plan__content" tabindex="-1">
                                        <div class="subscription-plan__price">
                                            <h2 class="subscription-plan__price--primary">
                                                <b>
                                                    <div class="price-box price-final_price" data-role="priceBox" data-product-id="5510" data-price-box="product-id-5510">
                                                        <span class="price-container price-final_price tax weee">
                                                            <span id="product-price-5510" data-price-amount="999" data-price-type="finalPrice" class="price-wrapper ">
                                                                <span class="price">€<span style="color:#1ed012">15</span></span>
                                                            </span> 
                                                        </span> 
                                                    </div>
                                                </b> 
                                                <sup>/Month</sup>
                                            </h2>
                                            <h3 class="subscription-plan__price--secondary">
                                                <p style="text-align: left; padding: 10px 10px 0px 10px;">
                                                    <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                    <span class="memebership_item_text">Exclusive offers</span>
                                                </p>
                                                <p style="text-align: left; padding: 0px 10px 0px 10px;">
                                                    <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                    <span class="memebership_item_text">Access to quizzes</span>
                                                </p>                                               
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="text-center mt-3 mb-3">
                                        <button type="button" class="btn btn_plan btn_subscribe_now" data-price="20"><span class="price">Subscribe Now</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <a href="/" class="btn btn_plan">Maybe later</a>
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
                                <div class="d-flex" style="justify-content: space-between;">
                                    <span class="text-white fs-24">Stripe</span>
                                    <img src="{{ asset('public/assets/img/card.png') }}" style="width:165px;height:35px;" alt="">
                                </div>
                            </div>
                            <div class="pay_body mt-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name of Card">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Card Number">
                                </div>
                                <div class="form-group">                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="" class="text-white">CVC</label>
                                            <input type="text" class="form-control" placeholder="ex.311">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="text-white">Expiration Month</label>
                                            <input type="text" class="form-control" placeholder="MM">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="text-white">Expiration Year</label>
                                            <input type="text" class="form-control" placeholder="YYYY">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center mt-5">
                                    <button type="button" class="btn btn_plan">Pay Now €<span class="btn_pay_now_price"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>               
            </div>            
        </div>
    </div>
</div>
@endsection