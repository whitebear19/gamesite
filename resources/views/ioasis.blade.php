@extends('layouts.base')

@section('content')
<div class="">
    <div class="main">
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
        <div class="banner-video pos_rel">
            <div>
                <video id="video" muted="" playsinline="playsinline" autoplay="" loop="true" style="pointer-events: none;">
                <source src="{{ $video }}" type="video/mp4">
                </video>
            </div>
            <div class="inner_area">
                <p class="inner_area_txt">Virtual reality training with i-Oasis</p>
                <a href="{{ route('subscription') }}" class="btn_try_oasis" title="">
                    <p style="font-weight:600; font-size: 18px;letter-spacing: 0.11px;margin:0px;">                        
                        Subscribe now
                    </p>
                </a>
            </div>
        </div>
        <div class="section_awaits section-common ioasis_common_section_back_col">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h3 class="isasis_section_title">
                                Your next virtual experience awaits
                            </h3>
                            <p class="isasis_section_txt">
                                All the best virtual training in one subscription
                            </p>
                        </div>                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-center">
                            <div>
                                <img class="awaits_img" src="{{ asset('public/assets/img/ioasis-headsets.png') }}" alt="">
                            </div>
                            <div class="">
                                <p class="awaits_txt">Curated content</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <div>
                                <img class="awaits_img" src="{{ asset('public/assets/img/ioasis-experiences.png') }}" alt="">
                            </div>
                            <div class="">
                                <p class="awaits_txt">New titles added <br>
                                    frequently</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <div>
                                <img class="awaits_img" src="{{ asset('public/assets/img/ioasis-new_titles.png') }}" alt="">
                            </div>
                            <div class="">
                                <p class="awaits_txt">Critically-acclaimed <br>
                                    experiences</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <div>
                                <img class="awaits_img" src="{{ asset('public/assets/img/ioasis-compatible.png') }}" alt="">
                            </div>
                            <div class="">
                                <p class="awaits_txt">Compatible with most <br> VR headsets</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <div class="section_play section-common ioasis_common_section_back_col">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h3 class="isasis_section_title">
                                Get training with peace of mind
                            </h3>
                            <p class="isasis_section_txt">
                                There are no limitations, and always something new to enjoy.
                            </p>
                        </div>                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <div>
                                <img class="w-100" src="{{ $oasis }}" alt="">
                            </div>                           
                        </div>
                    </div>                   
                </div>
            </div>            
        </div>
        <div class="section_headset section-common ioasis_common_section_back_col">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h3 class="isasis_section_title">
                                Your choice of type of headset
                            </h3>
                            <p class="isasis_section_txt">
                                Oculus Quest 2, HTC VIVE
                            </p>
                        </div>                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <div>
                                <img class="w-100" src="{{ $headset }}" alt="">
                            </div>                           
                        </div>
                    </div>                   
                </div>    
            </div>            
        </div>
        <div class="section_journey section-common ioasis_common_section_back_col" style="display: none;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h3 class="isasis_section_title">
                                Start your journey
                            </h3>
                            <p class="isasis_section_txt">
                                Access an oasis of knowledge thanks to VR 
                            </p>
                        </div>                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center mt-5">
                            <div class="membership_card mt-2">
                                <div class="membership_card_header">
                                    INFINITY:MONTHLY SUBSCRIPTION
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
                                                    <span class="memebership_item_text">Pay Monthly</span>
                                                </p>
                                                <p style="text-align: left; padding: 0px 10px 0px 10px;">
                                                    <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                    <span class="memebership_item_text">Unlimited Access</span>
                                                </p>
                                                <p style="text-align: left; padding: 0px 10px 0px 10px;">
                                                    <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                    <span class="memebership_item_text">Hundreds of VR Experiences</span>
                                                </p>
                                                <p style="text-align: left; padding: 0px 10px 28.5px 10px;"><img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                    <span class="memebership_item_text">Exclusive Offers and Discounts</span>
                                                </p>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn_plan"><span class="price">TRY 14 DAYS FREE</span> </button>
                                    </div>
                                </div>
                            </div>
                            <div class="membership_card mt-2">
                                <div class="membership_card_header_annual">
                                    <div class="annual">
                                        BEST VALUE
                                    </div>                                    
                                </div>
                                <div class="membership_card_header">
                                    INFINITY: <span style="color:#e25e35!important">ANNUAL</span>  SUBSCRIPTION
                                </div>
                                <div class="membership_card_body">
                                    <div class="subscription-plan__content--monthly subscription-plan__content" tabindex="-1">
                                        <div class="subscription-plan__price">
                                            <h2 class="subscription-plan__price--primary">
                                                <b>
                                                    <div class="price-box price-final_price" data-role="priceBox" data-product-id="5510" data-price-box="product-id-5510">
                                                        <span class="price-container price-final_price tax weee">
                                                            <span id="product-price-5510" data-price-amount="999" data-price-type="finalPrice" class="price-wrapper ">
                                                                <span class="price">€15</span>
                                                            </span> 
                                                        </span> 
                                                    </div>
                                                </b> 
                                                <sup>/Month</sup>
                                            </h2>
                                            <h3 class="subscription-plan__price--secondary">
                                                <p style="text-align: left; padding: 10px 10px 0px 10px;">
                                                    <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                    <span class="memebership_item_text">Pay Monthly</span>
                                                </p>
                                                <p style="text-align: left; padding: 0px 10px 0px 10px;">
                                                    <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                    <span class="memebership_item_text">Unlimited Access</span>
                                                </p>
                                                <p style="text-align: left; padding: 0px 10px 0px 10px;">
                                                    <img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                    <span class="memebership_item_text">Hundreds of VR Experiences</span>
                                                </p>
                                                <p style="text-align: left; padding: 0px 10px 28.5px 10px;"><img src="{{ asset('public/assets/img/Icon_check_gold.png') }}" width="22" height="17" caption="false">&nbsp;&nbsp;
                                                    <span class="memebership_item_text">Exclusive Offers and Discounts</span>
                                                </p>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn_plan"><span class="price">SUBSCRIBE NOW</span> </button>
                                    </div>
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