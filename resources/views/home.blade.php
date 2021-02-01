@extends('layouts.base')

@section('content')
<div class="">
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
    @if ($banners)
        <div class="banner">        
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @for ($i = 0; $i < count($banners); $i++) 
                        <div class="carousel-item @if($i == 0) active @endif">
                            <div class="d-flex">
                                <div class="slide_left text-center pos_rel">
                                    <div class="vertical_middle">
                                        <p class="text-white fs-20">{{ __('home.NEW IN i-Oasis') }}</p>
                                        <a href="{{ url('game_detail', $banners_id ) }}" class="btn_play_now">{{ __('home.PLAY NOW') }}</a>
                                    </div>                            
                                </div>
                                <div class="slide_right">                                    
                                    @php
                                        $ext = explode('.', $banners[$i])
                                    @endphp
                                    @if ($ext[1] == 'avi' or $ext[1] == 'mp4')
                                        <video class="d-block w-100" src="{{ asset('public/upload/game/'.$banners[$i]) }}" controls autoplay></video>
                                    @else
                                        <img class="d-block w-100" src="{{ asset('public/upload/game/'.$banners[$i]) }}" alt="" srcset="">
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endfor
                    
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    @endif
    
    <div class="main py-70">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="select_service">
                        
                        <div>
                            <p class="fs-16 mb-0"><b>{{ __('home.GENRE') }}</b></p>
                            <ul class="mb-0 ul_select_filter">
                                @foreach ($category as $item)
                                    <li class="mt-2 mb-2 text-left">                                                            
                                        <button class="btn_transparent btn_select_filter text-left" data-type="1" data-id="{{ $item->id }}">{{ $item->name }}</button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>       
                    </div>
                                 
                </div>
                <div class="col-md-9">
                    <div class="area_staff_picks">
                        <p class="fs-22"><b>{{ __('home.MOST POPULAR') }}</b></p>
                        <div class="row">
                            @if (count($most)>0)
                                @php
                                    $item = $most[0]    
                                @endphp
                                <div class="col-md-8">                                        
                                    
                                    <a href="{{ url('game_detail', $item->id ) }}">
                                        @php
                                            $images = json_decode($item->main_imgs);                        
                                        @endphp

                                        <div class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                @for ($i = 0; $i < count($images); $i++)                                                                    
                                                    <div class="carousel-item @if($i == 0) active @endif">
                                                        @php
                                                            $ext =  explode('.', $images[$i])
                                                        @endphp
                                                        @if ($ext[1] == 'avi' or $ext[1] == 'mp4')
                                                            <video class="w-100" src="{{ asset('public/upload/game/'.$images[$i]) }}" controls autoplay></video>
                                                        @else
                                                            <img class="w-100" src="{{ asset('public/upload/game/'.$images[$i]) }}" alt="" srcset="">
                                                        @endif
                                                    </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </a>
                                </div> 
                            
                                <div class="col-md-4">                                    
                                    @for ($j = 1; $j < 3; $j++)
                                        @if (!empty($most[$j]))
                                            @php
                                                $item = $most[$j];
                                            @endphp
                                        
                                            <a href="{{ url('game_detail', $item->id ) }}">
                                                @php
                                                    $images = json_decode($item->main_imgs);                        
                                                @endphp

                                                <div class="carousel slide" data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        @for ($i = 0; $i < count($images); $i++)                                                                    
                                                            <div class="carousel-item @if($i == 0) active @endif">
                                                                @php
                                                                    $ext =  explode('.', $images[$i])
                                                                @endphp
                                                                @if ($ext[1] == 'avi' or $ext[1] == 'mp4')
                                                                    <video class="w-100" src="{{ asset('public/upload/game/'.$images[$i]) }}" controls autoplay></video>
                                                                @else
                                                                    <img class="w-100" src="{{ asset('public/upload/game/'.$images[$i]) }}" alt="" srcset="">
                                                                @endif
                                                            </div>
                                                        @endfor
                                                    </div>
                                                </div>
                                            </a>
                                        @endif 
                                    @endfor
                                          
                                       
                                                        
                                </div>
                            @else
                                <div class="col-md-12">
                                    <p>{{ __('home.No most popular registered yet!') }}</p>
                                </div>
                            @endif  
                            
                        </div>
                    </div>
                    <div class="area_game_item pt-70">
                        <p class="fs-22"><b>{{ __('home.Coming Soon') }}</b></p>
                        <div class="row">
                            @if (count($soon)>0)
                                @foreach ($soon as $item)
                                    <div class="col-md-4" style="min-height: 250px;">
                                        <div class="pos_rel">
                                            <div class="product_item product-item-info">
                                                
                                                <span>                                                        
                                                    <a href="{{ url('game_detail', $item->id ) }}">
                                                        @php
                                                            $images = json_decode($item->main_imgs);                        
                                                        @endphp 
                                                        

                                                        <div id="" class="carousel slide" data-ride="carousel">
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
                                                
                                                <div class="actions-primary coming_soon_btn_wishlist h-50p">
                                                    <div class="text-center w-100 pos_rel">
                                                        <button class="btn_add_wishlist">
                                                            {{ __('home.ADD WISHLIST') }}
                                                        </button>
                                                    </div>                                            
                                                </div>
                                                <div class="product-item-title">
                                                    <strong class="product name product-item-name text-center">
                                                        <p class="coming_soon_text">{{ __('home.Available') }}: {{ $item->expected_date }}</p>
                                                        <a href="" class="product-item-link "> {{ $item->title }} </a> 
                                                    </strong> 
                                                </div>
                                                
                                                <div class="product details product-item-details">
                                                    
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
                                                                        @for ($i = 0; $i < count($compatible_with); $i++)    
                                                                            @php
                                                                                $src = \App\Model\Compatible::find($compatible_with[$i]);
                                                                            @endphp      
                                                                            @if (!empty($src))                                                                                                                                              
                                                                                <img  src="{{ asset('public/upload/game/compatible/'.$src->img) }}" alt="">    
                                                                            @endif 
                                                                        @endfor
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item-coming-soon">
                                                    <span>{{ __('home.Coming Soon') }}</span>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>   
                                @endforeach
                            @else
                                <div class="col-md-12">
                                    <p>{{ __('home.No coming soon game registered yet!') }}</p>
                                </div>
                            @endif
                                                     
                        </div>
                        
                    </div>
                    <div class="area_game_item pt-70">
                        <p class="fs-22"><b>{{ __('home.New Releases') }}</b></p>
                        <div class="row" style="min-height: 300px;">
                            @if (!empty($games))
                                @foreach ($games as $item)
                                    <div class="col-md-4" style="min-height: 235px;">
                                        <div class="pos_rel">
                                            <div class="product_item product-item-info">
                                                <a href="">
                                                    <span>
                                                        <a href="{{ url('game_detail', $item->id ) }}">
                                                            @php
                                                                $images = json_decode($item->main_imgs);                        
                                                            @endphp 
                                                            

                                                            <div id="" class="carousel slide" data-ride="carousel">
                                                                <div class="carousel-inner">
                                                                    @for ($i = 0; $i < count($images); $i++)                                                                    
                                                                        <div class="carousel-item game_img_item @if($i == 0) active @endif">
                                                                            @php
                                                                            $ext =  explode('.', $images[$i])
                                                                            @endphp
                                                                           
                                                                                <img class="radius_left-right" src="{{ asset('public/upload/game/'.$images[$i]) }}" alt="" srcset="">
                                                                            
                                                                        </div>
                                                                    @endfor
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </span>                                         
                                                </a>
                                                <div class="actions-primary d-flex h-50p">
                                                    <div class="w-50 pos_rel">
                                                        <button class="btn_price btn_addCart" data-id="{{ $item->id }}" data-price="{{ $item->price }}">
                                                            €{{ $item->price }}
                                                        </button>
                                                    </div>
                                                    <div class="w-50 pos_rel">
                                                        <button class="btn_play">
                                                            {{ __('home.Play') }}
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
                                                                        @for ($i = 0; $i < count($compatible_with); $i++)    
                                                                            
                                                                            @php
                                                                                $src = \App\Model\Compatible::find($compatible_with[$i]);
                                                                            @endphp      
                                                                            @if (!empty($src))                                                                                                                                              
                                                                                <img  src="{{ asset('public/upload/game/compatible/'.$src->img) }}" alt="">    
                                                                            @endif 

                                                                        @endfor
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
                            @else
                                <div class="col-md-12">
                                    <p>{{ __('home.No game registered yet') }}</p>
                                </div>                                
                            @endif
                                                        
                        </div>                        
                    </div>                                       
                </div>
            </div>
        </div>
    </div>  
</div>
<form action="{{ route('games') }}" method="get" class="form_select_sortby">
    <input type="hidden" value="" name="type">
    <input type="hidden" value="" name="id">
</form>
@endsection
