@extends('layouts.admin')

@section('content')
   <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-5">
                        <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">
                                @if ($game)
                                  Edit
                                @else
                                  New
                                @endif Game
                              </h3>
                            </div>
                           
                            <form method="POST" id="form_new_game">
                            @csrf
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="">Game Title</label>
                                  <input type="text" name="title" class="form-control required" value="@if ($game) {{ $game->title }} @endif" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label for="">Game Description</label>
                                    <textarea type="text" name="description" class="form-control required"  placeholder="Enter description">@if ($game) {{ $game->description }} @endif</textarea>
                                </div>
                                <div class="form-group">
                                  <label for="">Main Category</label>
                                  <select name="main_category" class="form-control main_category required">
                                    <option value="">------Select Main Category-----</option>
                                    @foreach ($category as $item)
                                      <option value="{{ $item->id }}" @if ($game) @if ($game->cat_main == $item->id) selected @endif @endif >{{ $item->name }}</option>
                                    @endforeach
                                  </select>
                                </div>                                
                                <div class="form-group">
                                  <label for="">Price</label>
                                  <input type="text" name="price" class="form-control required" value="@if ($game) {{ $game->price }} @endif" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">Developer Name</label>
                                    <input type="text" name="dev_name" class="form-control" value="@if ($game) {{ $game->dev_name }} @endif" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">Developer Email</label>
                                    <input type="email" name="dev_email" class="form-control" value="@if ($game) {{ $game->dev_email }} @endif" placeholder="">
                                </div>

                                <div class="form-group">
                                  <label for="">System Requirements</label>
                                  <div class="border-radius-area">
                                    <div class="row mb-3">
                                      <div class="col-md-4">
                                        <label for="">Available OS</label>
                                      </div>
                                      <div class="col-md-8">
                                        <input type="text" name="available_os" value="@if ($game) {{ $game->available_os }} @endif" class="form-control">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <div class="col-md-4">
                                        <label for="">Available OS Bit</label>
                                      </div>
                                      <div class="col-md-8">
                                        <input type="text" name="available_os_bit" class="form-control" value="@if ($game) {{ $game->available_os_bit }} @endif">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <div class="col-md-4">
                                        <label for="">Processor</label>
                                      </div>
                                      <div class="col-md-8">
                                        <input type="text" name="processor" class="form-control" value="@if ($game) {{ $game->processor }} @endif">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <div class="col-md-4">
                                        <label for="">Memory</label>
                                      </div>
                                      <div class="col-md-8">
                                        <input type="text" name="memory" class="form-control" value="@if ($game) {{ $game->memory }} @endif">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <div class="col-md-4">
                                        <label for="">DirectX Version</label>
                                      </div>
                                      <div class="col-md-8">
                                        <input type="text" name="direct" class="form-control" value="@if ($game) {{ $game->direct }} @endif">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <div class="col-md-4">
                                        <label for="">Disk Space</label>
                                      </div>
                                      <div class="col-md-8">
                                        <input type="text" name="disk_space" class="form-control" value="@if ($game) {{ $game->disk_space }} @endif">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <div class="col-md-4">
                                        <label for="">Graphics</label>
                                      </div>
                                      <div class="col-md-8">
                                        <input type="text" name="graphics" class="form-control" value="@if ($game) {{ $game->graphics }} @endif">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <div class="col-md-4">
                                        <label for="">Additional Notes</label>
                                      </div>
                                      <div class="col-md-8">
                                        <input type="text" name="additional" class="form-control" value="@if ($game) {{ $game->additional }} @endif">
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  
                                  
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label for="">Language</label>
                                    </div>
                                    <div class="col-md-8">
                                      <select multiple="multiple" name="" placeholder="Select Language" class="SlectBox required form-control">
                                        <option value="English(United Status)">English</option>
                                        <option value="Chiness(Simplified)">Chinese(Simplified)</option>
                                        <option value="Chiness(Traditional)">Chinese(Traditional)</option>
                                        <option value="French(France)">French(France)</option>
                                        <option value="German">German</option>
                                        <option value="Italian">Italian</option>
                                        <option value="Japanese">Japanese</option>
                                        <option value="Korean(South Korea)">Korean(South Korea)</option>
                                        <option value="Russian">Russian</option>
                                        <option value="Spanish">Spanish</option>
                                      </select>
                                      
                                      
                                    </div>
                                  </div>
                                  <div class="language_area" style="display: none;">
                                        
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="">Game Play</label>
                                  <div class="border-radius-area">
                                    <div class="row mb-3">
                                      <div class="col-md-4">
                                        <label for="">Playing time</label>
                                      </div>
                                      <div class="col-md-8">
                                        <input type="text" name="playing_time" class="form-control required" value="@if ($game) {{ $game->playing_time }} @endif">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <div class="col-md-4">
                                        <label for="">Scoring</label>
                                      </div>
                                      <div class="col-md-8">
                                        <input type="text" name="scoring" class="form-control required" value="@if ($game) {{ $game->scoring }} @endif">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <div class="col-md-4">
                                        <label for="">Number of players</label>
                                      </div>
                                      <div class="col-md-8">
                                        <input type="text" name="num_players" class="form-control required" value="@if ($game) {{ $game->num_players }} @endif">
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="">Compatible With</label>
                                  <div class="border-radius-area">
                                    <div class="row mb-3">
                                      
                                      <div class="col-md-12">
                                        <div class="added_compatible_item">
                                          @if ($game)
                                            @php
                                                $compatible_with = json_decode($game->compatible_with); 
                                            @endphp
                                          @else
                                            @php
                                                $compatible_with = ''; 
                                            @endphp
                                          @endif

                                          @foreach ($compatible as $item)
                                            @php
                                                $is_check = False;
                                            @endphp
                                            @if (!empty($compatible_with))
                                              @for ($i = 0; $i < count($compatible_with); $i++)
                                                @if ($item->id == $compatible_with[$i]) 
                                                  @php
                                                    $is_check = True;
                                                  @endphp
                                                @endif
                                              @endfor
                                            @endif
                                            
                                            <div class="form-check d-inline-block mr-3">
                                              <input type="checkbox" class="form-check-input" name="compatible_with[]" value="{{ $item->id }}" id="compatible_with_{{ $item->id }}" @if ($is_check) checked @endif>
                                              <label class="form-check-label" for="compatible_with_{{ $item->id }}">{{ $item->name }}</label>
                                            </div>
                                          @endforeach
                                          
                                        </div>
                                      </div>
                                    </div>                                    
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputFile">Main Image</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="mainImage" accept=".jpg, .jpeg, .png, .svg, .mp4, .avi " multiple>
                                      <label class="custom-file-label" for="mainImage">Choose file</label>
                                    </div>                                   
                                  </div>
                                  
                                </div>
                                <div class="form-group">
                                  <div class="" style="padding:10px;">
                                    <ul class="upload_post_image">
                                      @if ($game)
                                        @php
                                            $mainImages = json_decode($game->main_imgs);                        
                                        @endphp 
            
                                        @for ($i = 0; $i < count($mainImages); $i++)
                                            <li class="upload_post_image_item">
                                              <div class="pos_rel game_img_wrap">
                                              <button type="button" class="btn_transparent btn_post_img_delete" data-value="{{ $mainImages[$i] }}"><i class="fa fa-times text-color-red"></i></button>
                                              <img class="uploaded_game_image" src="{{ asset('upload/game/'.$mainImages[$i]) }}" alt="">
                                              </div>
                                              <input name="image_name[]" type="hidden" value="{{ $mainImages[$i] }}">
                                            </li>
                                        @endfor
                                      @endif
                                      
                                    </ul>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputFile">Sub Image</label>
                                  <div class="input-group">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="subImage" accept=".jpg, .jpeg, .png" multiple>
                                      <label class="custom-file-label" for="subImage">Choose file</label>
                                    </div>                                   
                                  </div>
                                  
                                </div>
                                <div class="form-group">
                                  <div class="" style="padding:10px;">
                                    <ul class="upload_post_image_sub">
                                      @if ($game)
                                        @php
                                            $subImages = json_decode($game->sub_imgs);                        
                                        @endphp 
                                        
                                        @for ($i = 0; $i < count($subImages); $i++)
                                            <li class="upload_post_image_item_sub">
                                              <div class="pos_rel game_img_wrap">
                                                <button type="button" class="btn_transparent btn_post_img_delete_sub" data-value="{{ $subImages[$i] }}"><i class="fa fa-times text-color-red"></i></button>
                                                <img class="uploaded_game_image" src="{{ asset('upload/game/'.$subImages[$i]) }}" alt="">
                                              </div>
                                              <input name="image_name_sub[]" type="hidden" value="{{ $subImages[$i] }}">
                                            </li>
                                        @endfor  
                                      @endif
                                    </ul>
                                  </div>
                                </div>
                               
                                <div class="form-group">
                                  <label for="">Select Game Type</label>
                                  <div class="border-radius-area">
                                    <div class="row mb-3">
                                      <div class="col-md-12">
                                        <div class="form-check d-inline-block mr-3">
                                          <input class="form-check-input" type="radio" value="1" @if($game) @if ($game->status == '1') checked @endif @endif name="status">
                                          <label class="form-check-label">Publish</label>
                                        </div>
                                        <div class="form-check d-inline-block mr-3">
                                          <input class="form-check-input" type="radio" value="9" @if($game) @if ($game->status == '9') checked @endif @endif name="status">
                                          <label class="form-check-label">Most Popular</label>
                                        </div>
                                        <div class="form-check d-inline-block mr-3">
                                          <input class="form-check-input" type="radio" value="99" @if($game) @if ($game->status == '99') checked @endif @endif name="status">
                                          <label class="form-check-label">Coming Soon</label>
                                        </div>
                                        <div class="d-inline-block">
                                          <input type="date" name="expected_date" @if($game) value="{{ $game->expected_date }}" @endif class="form-control">
                                        </div>
                                      </div>
                                    </div>                                   
                                  </div>
                                </div>
                              </div>
                              <!-- /.card-body -->
              
                              <div class="card-footer">
                                <button type="button" class="btn btn-primary btn_store_game">
                                  
                                  @if ($game)
                                    Update
                                  @else
                                    Register
                                  @endif
                                </button>
                                <a href="{{ route('admin.games') }}" class="btn btn-cancel">Cancel</a>
                              </div>
                              <input type="hidden" name="game_id" value="@if ($game) {{ $game->id }} @endif">
                            </form>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
@endsection