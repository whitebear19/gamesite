@extends('layouts.admin')

@section('content')
   <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6"> 
                    <div class="mt-5">
                        <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Edit Banner Video</h3>
                            </div>
                           
                            <div class="card-body">
                                <div class="form-group">                                
                                    <div class="border-radius-area">
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="admin_img_warp">                                                 
                                                    <video class="w-100" muted="" playsinline="playsinline" autoplay="" loop="true" style="pointer-events: none;">
                                                        <source src="{{ $video }}" type="video/mp4">
                                                    </video>  
                                                    <label class="btn_edit_oasis" for="editVideo">
                                                        <i class="fas fa-upload"></i>
                                                        <input id="editVideo" data-type="0" name="file-attachment" type="file" accept=".mp4, .avi" class="d-none editsetting">
                                                    </label>                        
                                                </div>
                                            </div>                                   
                                        </div>                                    
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>   
                <div class="col-lg-6"> 
                    <div class="mt-5">
                        <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Edit Image "Get training with peace of mind"</h3>
                            </div>
                           
                            <div class="card-body">
                                <div class="form-group">                                
                                    <div class="border-radius-area">
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="admin_img_warp">
                                                    <img class="w-100" src="{{ $oasis }}" alt="">  
                                                          
                                                    <label class="btn_edit_oasis" for="editOasisEnjoy">
                                                        <i class="fas fa-upload"></i>
                                                        <input id="editOasisEnjoy" data-type="1" name="file-attachment" type="file" accept=".jpg, .jpeg, .png, .gif" class="d-none editsetting">
                                                    </label>                        
                                                </div>
                                            </div>                                   
                                        </div>                                    
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>      
                
                <div class="col-lg-6"> 
                    <div class="mt-5">
                        <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">Edit Image "Your choice of type of headset"</h3>
                            </div>
                           
                            <div class="card-body">
                                <div class="form-group">                                
                                    <div class="border-radius-area">
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="admin_img_warp">
                                                    <img class="w-100" src="{{ $headset }}" alt="">  
                                                          
                                                    <label class="btn_edit_oasis" for="editOasisHeadset">
                                                        <i class="fas fa-upload"></i>
                                                        <input id="editOasisHeadset" data-type="2" name="file-attachment" type="file" accept=".jpg, .jpeg, .png, .gif" class="d-none editsetting">
                                                    </label>                        
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
        </div>
    </div>

    
@endsection