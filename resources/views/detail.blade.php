@extends('layouts.base')
@php
    $domain = " | i-oasis";
    $title = $game->title.$domain;
    $desc = $game->description.$domain;
@endphp
@section('title', $title)
@section('meta_keywords', $title)
@section('meta_description', $desc)
@section('content')
<div class="">
    <div class="banner">   
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="game_info">
                        <div>
                            <h1 class="game_title">{{ $game->title }}</h1>
                        </div>
                        
                        <div class="text-right">
                            <div>                                
                                <button class="btn_game_price mr-20">
                                    €{{ $game->price }}
                                </button>
                                @guest
                                    <a href="{{ route('login') }}" class="btn_game_subscribe">
                                        {{ __('detail.Play by subscription') }}
                                    </a>
                                @else                                    
                                    <form action="{{ route('addtocart') }}" class="d-inline-block" method="post">
                                    @csrf
                                        <input type="hidden" name="gid" value="{{ $game->id }}">
                                        <button type="submit" class="btn_game_subscribe">{{ __('detail.Add to cart') }}</button>
                                    </form>
                                @endguest
                                
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="row">                
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">                       
                        <div class="carousel-inner">
                            @php
                                $mainImages = json_decode($game->main_imgs);                        
                            @endphp 

                            @for ($i = 0; $i < count((array)$mainImages); $i++)
                                <div class="carousel-item @if($i == 0) active @endif">
                                    <div class="">
                                        @php
                                            $ext =  explode('.', $mainImages[$i])
                                        @endphp
                                        @if ($ext[1] == 'avi' or $ext[1] == 'mp4')
                                            <video class="d-block w-100" src="{{ asset('public/upload/game/'.$mainImages[$i]) }}" controls></video>
                                        @else
                                            <img src="{{ asset('public/upload/game/'.$mainImages[$i]) }}" class="d-block w-100" alt="...">
                                        @endif
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
                <div class="col-md-12 mt-4">
                    @php
                        $subImages = json_decode($game->sub_imgs);                        
                    @endphp 
                    <section class="regular game_detail_info_img slider">
                        @for ($i = 0; $i < count((array)$subImages); $i++)                            
                            <div class="">
                                
                                @php
                                    $ext =  explode('.', $subImages[$i])
                                @endphp
                                @if ($ext[1] == 'avi' or $ext[1] == 'mp4')
                                    <video src="{{ asset('public/upload/game/'.$subImages[$i]) }}" autoplay></video>
                                @else
                                    <img src="{{ asset('public/upload/game/'.$subImages[$i]) }}">
                                @endif
                            </div>      
                        @endfor     
                    </section>
                </div>
            </div>   
        </div>
    </div>
    <div class="main py-70">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="d-flex">
                        <div class="w-100px">
                            <label for="">
                                {{ __('detail.COMPATIBLE WITH') }}:
                            </label>
                        </div>
                        <div>
                            @php
                                $compatible_img = json_decode($game->compatible_img);                        
                                $compatible_txt = json_decode($game->compatible_txt);                     
                            @endphp 
                        
                                
                            @for ($i = 0; $i < count((array)$compatible_img); $i++)
                                <div class="d-inlineblock">
                                    <div class="compatible_item">
                                        <img  src="{{ asset('public/upload/game/compatible/'.$compatible_img[$i]) }}" alt="">
                                        <span>{{ $compatible_txt[$i] }}</span>
                                    </div>
                                </div>            
                            @endfor
                           

                                            
                            
                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div class="w-100px">
                            <label for="">
                                {{ __('detail.GENRE') }}:
                            </label>
                        </div>
                        <div>
                            @if ($game->cat_main)
                                <div class="d-inlineblock">
                                    <div class="compatible_item">                                    
                                        <span>{{ $game->get_main->name }}</span>
                                    </div>
                                </div>
                            @endif
                            
                                           
                        </div>
                    </div>
                    <div class="detail_description mt-4">
                        <h1 class="game_title">
                            {{ __('detail.Description') }}
                        </h1>
                        <div>
                            <textarea id="game_description" style="background-color: transparent;border:none;box-shadow:none;outline:none;font-family:Arial;line-height:25px;width: 100%;" name="">{{ $game->description }}</textarea>
                        </div>
                    
                    </div>                    
                    
                </div>
                <div class="col-md-4 col-12">
                    <div class="game_details_text meta-list-block">
                        <label for="">{{ __('detail.Game Play') }}</label>
                        @if ($game->playing_time)
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <label for="" class="text-grey game_details_text_title">
                                        {{ __('detail.Playing time') }}
                                    </label>
                                </div>
                                <div class="">
                                    <label for="" class="game_details_text_content">
                                            {{ $game->playing_time }}                                       
                                    </label>
                                </div>
                            </div>
                        @endif
                        @if ($game->scoring)
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <label for="" class="text-grey game_details_text_title">
                                        {{ __('detail.Scoring') }}
                                    </label>
                                </div>
                                <div class="">
                                    <label for="" class="game_details_text_content">
                                        {{ $game->scoring }} 
                                    </label>
                                </div>
                            </div>
                        @endif 
                        @if ($game->num_players)
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <label for="" class="text-grey game_details_text_title">
                                        {{ __('detail.Number of players') }}
                                    </label>
                                </div>
                                <div class="">
                                    <label for="" class="game_details_text_content">                                    
                                        {{ $game->num_players }}                                   
                                    </label>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="game_details_text meta-list-block mt-4">
                        <label for="">{{ __('detail.Languages') }}</label>
                        @php
                            $language = json_decode($game->language);                        
                        @endphp 
                       
                        <table>     
                            @for ($i = 0; $i < count((array)$language); $i++)
                                <tr>
                                    <td class="text-left">{{ $language[$i] }}</td>
                                    <td class="text-center">
                                        <span class="basedStyle circle">
                                        </span>
                                    </td>                               
                                </tr>     
                            @endfor
                        </table>
                    </div>

                    <div class="game_details_text meta-list-block mt-4">
                        <p>{{ __('detail.System requirments') }}</p>
                        @if ($game->available_os)
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <label for="" class="text-grey game_details_text_title">
                                        {{ __('detail.Available OS') }}
                                    </label>
                                </div>
                                <div class="text-right">
                                    <p for="" class="game_details_text_content">
                                        {{ $game->available_os }}
                                    </p>                                
                                </div>
                            </div>
                        @endif  
                        @if ($game->available_os_bit)
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <label for="" class="text-grey game_details_text_title">
                                        {{ __('detail.Available bitness of OS') }}
                                    </label>
                                </div>
                                <div class="">
                                    <label for="" class="game_details_text_content">                                    
                                        {{ $game->available_os_bit }}                                   
                                    </label>
                                </div>
                            </div>
                        @endif
                        @if ($game->processor)
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <label for="" class="text-grey game_details_text_title">
                                        {{ __('detail.Processor') }}
                                    </label>
                                </div>
                                <div class="">
                                    <label for="" class="game_details_text_content">                                    
                                        {{ $game->processor }}                                   
                                    </label>
                                </div>
                            </div>
                        @endif
                        @if ($game->memory)
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <label for="" class="text-grey game_details_text_title">
                                        {{ __('detail.Memory') }}
                                    </label>
                                </div>
                                <div class="">
                                    <label for="" class="game_details_text_content">                                        
                                        {{ $game->memory }}                                       
                                    </label>
                                </div>
                            </div>
                        @endif
                        @if ($game->direct)
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <label for="" class="text-grey game_details_text_title">
                                        {{ __('detail.DirectX Version') }}
                                    </label>
                                </div>
                                <div class="">
                                    <label for="" class="game_details_text_content">                                        
                                        {{ $game->direct }}                                       
                                    </label>
                                </div>
                            </div>
                        @endif 
                        @if ($game->disk_space)
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <label for="" class="text-grey game_details_text_title">
                                        {{ __('detail.Disk space') }}
                                    </label>
                                </div>
                                <div class="">
                                    <label for="" class="game_details_text_content">                                    
                                        {{ $game->disk_space }}                                    
                                    </label>
                                </div>
                            </div>
                        @endif
                        @if ($game->graphics)
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <label for="" class="text-grey game_details_text_title">
                                        {{ __('detail.Graphics') }}
                                    </label>
                                </div>
                                <div class="">
                                    <label for="" class="game_details_text_content">                                    
                                        {{ $game->graphics }}                                   
                                    </label>
                                </div>
                            </div>
                        @endif
                        @if ($game->additional)
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <label for="" class="text-grey game_details_text_title">
                                        {{ __('detail.Additional') }}
                                    </label>
                                </div>
                                <div class="">
                                    <label for="" class="game_details_text_content">                                    
                                        {{ $game->additional }}                                    
                                    </label>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="game_details_text meta-list-block mt-4">
                        <p>{{ __('detail.Developer Details') }}</p>
                        <div class="d-flex">
                            <div class="mr-auto">
                                <label for="" class="text-grey game_details_text_title">
                                    {{ __('detail.Developer') }}
                                </label>
                            </div>
                            <div class="">
                                <label for="" class="game_details_text_content">
                                    @if ($game->dev_name)
                                        {{ $game->dev_name }}
                                    @else
                                        -
                                    @endif   
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mr-auto">
                                <label for="" class="text-grey game_details_text_title">
                                    {{ __('detail.Contact') }}
                                </label>
                            </div>
                            <div class="">
                                <label for="" class="game_details_text_content">
                                    @if ($game->dev_email)
                                        {{ $game->dev_email }}
                                    @else
                                        -
                                    @endif   
                                </label>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
<script>
    $(document).ready(function(){
        autosize(document.getElementById("game_description"));
        $('.game_detail_info_img').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            responsive: [
                {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
                },
                {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
                }
            ]
        });       
    });
</script>
@endsection
