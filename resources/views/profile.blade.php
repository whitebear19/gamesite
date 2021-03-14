@extends('layouts.base')

@php
    $domain = " | i-oasis";
    $title = Auth::user()->name.$domain;
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
                        <div class="userinfo_wrapper">
                            <div class="userinfo_area">   
                                <form action="" class="form_userinfo" method="post">
                                @csrf
                                    <div class="form-group">
                                        <label for="">{{ __('profile.Your name') }}</label>
                                        <input type="text" class="form-control" name="name" placeholder="" value="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">{{ __('profile.Your email') }}</label>
                                        <input type="text" class="form-control" name="email" placeholder="" value="{{ Auth::user()->email }}">
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="button" class="btn btn_plan btn_update_userinfo">{{ __('profile.Update') }}</button>
                                    </div>
                                </form>                             
                                
                                <hr class="mt-2" style="border-color: #423304;">
                                <form action="" class="form_password" method="post">
                                @csrf
                                    <div class="form-group">
                                        <label for="">{{ __('Change password') }}</label>
                                        <input type="password" class="form-control" name="password" placeholder="" autocomplete="off" value="">
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="button" class="btn btn_plan btn_update_password">{{ __('profile.Update') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                       
                    </div>                   
                </div>                
            </div>            
        </div>       
    </div>
</div>
@endsection