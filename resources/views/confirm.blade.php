@extends('layouts.base')
@php
    $domain = " | i-oasis";
    $title = __('messages.Confirm').$domain;
@endphp
@section('title', $title)
@section('meta_keywords', $title)
@section('meta_description', $title)
@section('content')
<div class="">
    <div class="main">       
        <div class="section-common ioasis_common_section_back_col" style="min-height: 50vh;">
            <div class="container">               
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center mt-2">
                            <p class="fs-18 text-white">
                                {{ __('ioasis.Before proceeding, please check your email for a verification link. If you did not receive the email,') }}' <button class="btn_resend_link">{{ __('ioasis.click here to request another') }}.</button>   
                            </p>                            
                        </div>
                    </div>                   
                </div>                
            </div>            
        </div>       
    </div>
</div>
@endsection