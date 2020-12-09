@extends('layouts.base')

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
                        <div class="game_info_detail">
                            <ul>
                                <li class="border-right-info">
                                    <label for="">
                                        GINRA TECH
                                    </label>
                                </li>
                                <li class="border-right-info">
                                    <div class="d-flex">
                                        <label for="">
                                            3 &nbsp;
                                        </label>
                                        <img class="" style="width: 15px;" src="{{ asset('public/assets/img/Icon_rating_yellow_fill.svg') }}" alt="">
                                    </div>                                   
                                </li>
                                <li>
                                    <label for="">
                                        <a href="">3 reviews</a>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="text-right">
                            <div>
                                <a href="" class="mr-20">
                                    <i class="far fa-heart fs-24"></i>
                                </a>
                                <button class="btn_game_price mr-20">
                                    €{{ $game->price }}
                                </button>
                                <button class="btn_game_subscribe">
                                    Play By Subscription
                                </button>
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
                                COMPATIBLE WITH:
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
                                GENRE:
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
                            Description
                        </h1>
                        <div>
                            <textarea id="game_description" style="background-color: transparent;border:none;box-shadow:none;outline:none;font-family:Arial;line-height:25px;width: 100%;" name="">{{ $game->description }}</textarea>
                        </div>
                    
                    </div>
                    @if ($game->status != '9')
                        <div class="view_rating_area mt-5">
                            <div class="fs-20">
                                <label for="">
                                    User reviews with 5 stars |
                                </label>
                                <a href="">Show all</a>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="d-flex">
                                        <div>
                                            <label for="" class="fs-40">3</label>
                                        </div>
                                        <div>
                                            <div class="product details product-item-details" style="margin-top:8px;">
                                                <div class="product-item-details--wrapper">
                                                    <div class="actions-secondary" data-role="add-to-links">
                                                        <div class="product-item-rating">
                                                            <div class="amstars-rating-container" title="96%">
                                                                <p class="amstars-stars" style="width: 91%;">
                                                                    <span class="hidden">96%</span> 
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="amreview-summary-details pages" data-amreview-js="summary-details">
                                        <a class="amreview-label" rel="nofollow" href="">
                                            <p class="amreview-stars"> 5 <i class="fas fa-star"></i></p>             
                                            <div class="amreview-bar percent-bar">
                                                <div class="amreview-bar -active" style="width:33%"></div>
                                            </div>
                                            <p class="amreview-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33% (1)</font></font></p>
                                        </a>
                                        <a class="amreview-label" rel="nofollow" href="">
                                            <p class="amreview-stars"> 5 <i class="fas fa-star"></i></p>             
                                            <div class="amreview-bar percent-bar">
                                                <div class="amreview-bar -active" style="width:0%"></div>
                                            </div>
                                            <p class="amreview-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0% (0)</font></font></p>
                                        </a>
                                        <a class="amreview-label" rel="nofollow" href="">
                                            <p class="amreview-stars"> 5 <i class="fas fa-star"></i></p>    
                                            <div class="amreview-bar percent-bar">
                                                <div class="amreview-bar -active" style="width:33%"></div>
                                            </div>
                                            <p class="amreview-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33% (1)</font></font></p>
                                        </a>
                                        <a class="amreview-label" rel="nofollow" href="">
                                            <p class="amreview-stars"> 5 <i class="fas fa-star"></i></p>                
                                            <div class="amreview-bar percent-bar">
                                                <div class="amreview-bar -active" style="width:0%"></div>
                                            </div>
                                            <p class="amreview-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0% (0)</font></font></p>
                                        </a>
                                        <a class="amreview-label" rel="nofollow" href="">
                                            <p class="amreview-stars"> 5 <i class="fas fa-star"></i></p>    
                                            <div class="amreview-bar percent-bar">
                                                <div class="amreview-bar -active" style="width:33%"></div>
                                            </div>
                                            <p class="amreview-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33% (1)</font></font></p>
                                        </a>
                                    </div>
                                    <div class="sortby mt-5">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment_area mt-4">
                            <div class="comment_item">
                                <div class="d-flex">
                                    <div class="w50px">
                                        <img class="w-100" src="{{ asset('public/assets/img/avatar.png') }}" alt="">
                                    </div>
                                    <div class="w-100 comment_content">
                                        <div class="user_info">
                                            <p class="user_name">
                                                Itzik
                                            </p>
                                            <span class="user_date">Oct 27 2020</span>
                                        </div>
                                        <div>
                                            <div class="product details product-item-details">
                                                <div class="product-item-details--wrapper">
                                                    <div class="actions-secondary" data-role="add-to-links">
                                                        <div class="product-item-rating">
                                                            <div class="amstars-rating-container" title="96%">
                                                                <p class="amstars-stars" style="width: 91%;">
                                                                    <span class="hidden">96%</span> 
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                            
                                            </div>
                                            <div>
                                                <p class="fs-14">
                                                    0 people found this helpful
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    
                </div>
                <div class="col-md-4 col-12">
                    <div class="game_details_text meta-list-block">
                        <label for="">Game Play</label>
                        <div class="d-flex">
                            <div class="mr-auto">
                                <label for="" class="text-grey game_details_text_title">
                                    Playing time
                                </label>
                            </div>
                            <div class="">
                                <label for="" class="game_details_text_content">
                                    @if ($game->playing_time)
                                        {{ $game->playing_time }}
                                    @else
                                        -
                                    @endif   
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mr-auto">
                                <label for="" class="text-grey game_details_text_title">
                                    Scoring
                                </label>
                            </div>
                            <div class="">
                                <label for="" class="game_details_text_content">
                                    @if ($game->scoring)
                                        {{ $game->scoring }}
                                    @else
                                        -
                                    @endif   
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mr-auto">
                                <label for="" class="text-grey game_details_text_title">
                                    Number of players
                                </label>
                            </div>
                            <div class="">
                                <label for="" class="game_details_text_content">
                                    @if ($game->num_players)
                                        {{ $game->num_players }}
                                    @else
                                        -
                                    @endif
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="game_details_text meta-list-block mt-4">
                        <label for="">Languages</label>
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
                        <p>System requirments</p>
                        <div class="d-flex">
                            <div class="mr-auto">
                                <label for="" class="text-grey game_details_text_title">
                                    Available OS
                                </label>
                            </div>
                            <div class="text-right">
                                <p for="" class="game_details_text_content">
                                    @if ($game->available_os)
                                        {{ $game->available_os }}
                                    @else
                                        -
                                    @endif                                    
                                </p>                                
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mr-auto">
                                <label for="" class="text-grey game_details_text_title">
                                    Available bitness of OS
                                </label>
                            </div>
                            <div class="">
                                <label for="" class="game_details_text_content">
                                    @if ($game->available_os_bit)
                                        {{ $game->available_os_bit }}
                                    @else
                                        -
                                    @endif   
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mr-auto">
                                <label for="" class="text-grey game_details_text_title">
                                    Processor
                                </label>
                            </div>
                            <div class="">
                                <label for="" class="game_details_text_content">
                                    @if ($game->processor)
                                        {{ $game->processor }}
                                    @else
                                        -
                                    @endif   
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mr-auto">
                                <label for="" class="text-grey game_details_text_title">
                                    Memory
                                </label>
                            </div>
                            <div class="">
                                <label for="" class="game_details_text_content">
                                    @if ($game->memory)
                                        {{ $game->memory }}
                                    @else
                                        -
                                    @endif   
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mr-auto">
                                <label for="" class="text-grey game_details_text_title">
                                    DirectX Version
                                </label>
                            </div>
                            <div class="">
                                <label for="" class="game_details_text_content">
                                    @if ($game->direct)
                                        {{ $game->direct }}
                                    @else
                                        -
                                    @endif   
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mr-auto">
                                <label for="" class="text-grey game_details_text_title">
                                    Disk space
                                </label>
                            </div>
                            <div class="">
                                <label for="" class="game_details_text_content">
                                    @if ($game->disk_space)
                                        {{ $game->disk_space }}
                                    @else
                                        -
                                    @endif   
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mr-auto">
                                <label for="" class="text-grey game_details_text_title">
                                    Graphics
                                </label>
                            </div>
                            <div class="">
                                <label for="" class="game_details_text_content">
                                    @if ($game->graphics)
                                        {{ $game->graphics }}
                                    @else
                                        -
                                    @endif   
                                </label>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mr-auto">
                                <label for="" class="text-grey game_details_text_title">
                                    Additional
                                </label>
                            </div>
                            <div class="">
                                <label for="" class="game_details_text_content">
                                    @if ($game->additional)
                                        {{ $game->additional }}
                                    @else
                                        -
                                    @endif   
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="game_details_text meta-list-block mt-4">
                        <p>Developer Details</p>
                        <div class="d-flex">
                            <div class="mr-auto">
                                <label for="" class="text-grey game_details_text_title">
                                    Developer
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
                                    Contact
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
