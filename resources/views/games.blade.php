@extends('layouts.base')
@php
    $domain = " | i-oasis";
    $title = __('games.Games').$domain;
@endphp
@section('title', $title)
@section('meta_keywords', $title)
@section('meta_description', $title)
@section('content')
<div class="">
   
    <div class="main">
        <div class="container pt-3">
            <div class="row">
                <div class="col-md-3">
                    <div class="select_service">
                        
                        <div>
                            <p class="fs-16 mb-0"><b>{{ __('games.Filter By') }}</b></p>
                           
                                @if (!empty($gid))
                                    @foreach ($gid as $id)
                                        @php
                                            $name = \App\Model\MainCategory::find($id)
                                        @endphp

                                        @if (!empty($name))                                        
                                            <p class="fs-16 mb-0 filter_result">{{ __('games.GENRE') }}: 
                                                <span>                                            
                                                    {{ $name->name }}                                                
                                                </span>
                                                <button class="btn_transparent btn_clear_filter_condition" data-type="1" data-id="{{ $id }}">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </p>
                                        @endif
                                    @endforeach 
                                @endif 
                                @if(!empty($hid))
                                    @foreach ($hid as $id)
                                        @php
                                            $name = \App\Model\Compatible::find($id)
                                        @endphp
                                        @if (!empty($name))                                        
                                            <p class="fs-16 mb-0 filter_result">{{ __('games.HEADSET') }}: 
                                                <span>                                                
                                                    {{ $name->name }}                                                
                                                </span>
                                                <button class="btn_transparent btn_clear_filter_condition" data-type="2" data-id="{{ $id }}">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </p>
                                        @endif
                                    @endforeach
                                @endif
                            
                            <div class="accordion-group">                                
                                <section class="accordion-group__accordion ">
                                    <header class="accordion-group__accordion-head">
                                        <h3 class="accordion-group__accordion-heading">
                                            <button type="button" class="accordion-group__accordion-btn"><b>{{ __('games.GENRE') }}</b></button>
                                        </h3>
                                    </header>
                                    <div class="accordion-group__accordion-panel">
                                        <div class="accordion-group__accordion-content">
                                            
                                            <ul class="mb-0 ul_select_filter">
                                                @foreach ($category as $item)
                                                    <li class="mt-2 mb-2 text-left">                                                           
                                                        <button class="btn_transparent btn_select_filter text-left" data-type="1" data-id="{{ $item->id }}">{{ $item->name }}</button>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </section>     
                                <section class="accordion-group__accordion ">
                                    <header class="accordion-group__accordion-head">
                                        <h3 class="accordion-group__accordion-heading">
                                            <button type="button" class="accordion-group__accordion-btn"><b>{{ __('games.HEADSET') }}</b></button>
                                        </h3>
                                    </header>
                                    <div class="accordion-group__accordion-panel">
                                        <div class="accordion-group__accordion-content">
                                            
                                            <ul class="mb-0 ul_select_filter">
                                                @foreach ($compatible as $item)
                                                    <li class="mt-2 mb-2 text-left">
                                                        <button class="btn_transparent btn_select_filter text-left" data-type="2" data-id="{{ $item->id }}">{{ $item->name }}</button>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </section>                                                                    
                            </div>
                        </div>       
                    </div>
                </div>
                <div class="col-md-9">                    
                    <div class="area_game_item pt-70m">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex-m">
                                    <div class="cnt_total mr-auto">
                                        <span class="fs-20">{{ count($games) }} {{ __('games.results') }}</span>
                                    </div>
                                    <form action="{{ route('games') }}" class="form_select_sortby" method="GET">
                                        <div class="sort_by">

                                            <label for="" class="mr-1">{{ __('games.Sort by') }}</label>
                                       
                                            <select name="sort" class="select_sortby" id="">
                                                <option value="az" @if ($sort == 'az') selected @endif>{{ __('games.Name A-Z') }}</option>
                                                <option value="ph" @if ($sort == 'ph') selected @endif>{{ __('games.Name Price High to Low') }}</option>
                                                <option value="pl" @if ($sort == 'pl') selected @endif>{{ __('games.Name Price Low to High') }}</option>
                                            </select>
                                        
                                        
                                            <button class="btn_transparent btn_direct_down">
                                                <span>
                                                    <svg style="width: 15px;height:15px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-alt-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-arrow-alt-down fa-w-14 fa-2x"><path fill="currentColor" d="M176 32h96c13.3 0 24 10.7 24 24v200h103.8c21.4 0 32.1 25.8 17 41L241 473c-9.4 9.4-24.6 9.4-34 0L31.3 297c-15.1-15.1-4.4-41 17-41H152V56c0-13.3 10.7-24 24-24z" class=""></path></svg>
                                                </span>
                                            </button>
                                        </div>
                                        @if (!empty($gid))
                                            @foreach ($gid as $id)
                                                <input type="hidden" value="{{ $id }}" class="gid gid_{{ $id }}" name="gid[]">
                                            @endforeach
                                        @endif
                                        @if (!empty($hid))
                                            @foreach ($hid as $id)
                                                <input type="hidden" value="{{ $id }}" class="hid hid_{{ $id }}" name="hid[]">
                                            @endforeach
                                        @endif                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="area_game_item pt-70">
                            <p class="fs-22"><b>{{ __('games.New Releases') }}</b></p>
                            <div class="row" style="min-height: 300px;">
                                @foreach ($games as $item)
                                    <div class="col-md-4" style="min-height: 240px;">
                                        <div class="pos_rel">
                                            <div class="product_item product-item-info">
                                                <a href="">
                                                    <span>
                                                        <a href="{{ url('game_detail', $item->id ) }}">
                                                            @php
                                                                $images = json_decode($item->main_imgs);                        
                                                            @endphp 
                                                            
    
                                                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                                                <div class="carousel-inner">
                                                                    @for ($i = 0; $i < count($images); $i++)
                                                                        <div class="carousel-item game_img_item @if($i == 0) active @endif">
                                                                            
                                                                            @php
                                                                            $ext =  explode('.', $images[$i])
                                                                            @endphp
                                                                            @if ($ext[1] == 'avi' or $ext[1] == 'mp4')
                                                                                <video class="radius_left-right" src="{{ asset('public/upload/game/'.$images[$i]) }}" controls autoplay></video>
                                                                            @else
                                                                                <img class="radius_left-right" src="{{ asset('public/upload/game/'.$images[$i]) }}" alt="" srcset="">
                                                                            @endif
                                                                        </div>
                                                                    @endfor
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </span>                                         
                                                </a>
                                                <div class="actions-primary d-flex h-50p">
                                                    <div class="w-50 pos_rel">
                                                        <button class="btn_price" data-price="{{ $item->price }}">
                                                            €{{ $item->price }}
                                                        </button>
                                                    </div>
                                                    <div class="w-50 pos_rel">
                                                        <button class="btn_play">
                                                            {{ __('games.Play') }}
                                                        </button>
                                                    </div>
                                                </div>                                                
                                                <div class="product details product-item-details">
                                                    <div class="product-item-details--wrapper">
                                                        <div class="actions-secondary text-truncate" data-role="add-to-links">
                                                            <div class="product-item-title-publish text-truncate">
                                                                <strong class="product name product-item-name">
                                                                    <a href="" class="product-item-link "> {{ $item->title }} </a> 
                                                                </strong> 
                                                            </div>
                                                        </div>
                                                        <div class="product-item-price">
                                                            <div class="product-item-price__info js-product-item--price t-uppercase">
                                                                <img class="logo-infinity w-30p" src="/public/assets/img/logo.png" atl="infinity logo">
                                                            </div>
                                                            <a href="#" class="action towishlist">
                                                                <div class="heart vp-favorite" data-product-sku="97d178c8-001c-4d09-a6bd-26cad79e31b3" data-product-name="Museum of Other Realities"></div>
                                                            </a> 
                                                        </div>
                                                    </div>
                                                    <div class="product-item-genres">                                                       
                                                        @if ($item->cat_main)
                                                            <div class="product-item-genre">{{ $item->get_main->name }}</div>
                                                        @endif 
                                                    </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions">
                                                            <div class="actions-tertiary">
                                                                <div class="product-item-icons">
                                                                    <div class="product-item-icons-os">
                                                                        <span class="icon icon-os-windows" aria-hidden="true"></span> 
                                                                    </div>
                                                                    <div class="product-item-icons-headset">
                                                                                                                                                
                                                                        @php
                                                                            $compatible_with = json_decode($item->compatible_with); 
                                                                        @endphp 
                                                                        @if($compatible_with == null)    
                                                                        @else   
                                                                            @for ($i = 0; $i < count($compatible_with); $i++)  
                                                                                @php
                                                                                    $src = \App\Model\Compatible::find($compatible_with[$i]);
                                                                                @endphp      
                                                                                @if (!empty($src))       
                                                                                    @if(file_exists('public/upload/game/compatible/'.$src->img))
                                                                                        <img  src="{{ asset('public/upload/game/compatible/'.$src->img) }}" alt="">     
                                                                                    @endif 
                                                                                @endif                                                                
                                                                            @endfor
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>                      
                                @endforeach                                 
                            </div>                        
                        </div>             
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
