@extends('layouts.admin')

@section('content')
   <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mt-5">
                        <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">New Compatible</h3>
                            </div>
                           
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Compatible With</label>
                                    <div class="border-radius-area">
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                        <div class="input_compatible">
                                            <label data-toggle="tooltip" data-placement="top" data-original-title="Upload New Picture" class="border_emojis" for="fileCompatibleBtn">
                                            <i class="far fa-image fs-26"></i>
                                            <input id="fileCompatibleBtn" name="file-attachment" type="file" accept=".jpg, .jpeg, .png, .gif, .svg" class="d-none">
                                            </label>
                                            <div class="preview_compatible_img">
                                            
                                            </div>
                                            <input type="text" name="" class="form-control mt-3 input_compatible_txt">
                                        </div>
                                        <div class="text-center mt-3">
                                            <button class="btn btn_add_compatible btn_blue btn-block" type="button">Add</button>                                          
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
                        <div class="card card-success">
                            <div class="card-header">
                              <h3 class="card-title">Compatible List</h3>
                            </div>
                            <div class="card-body">
                                <div class="added_compatible_item">
                                    @foreach ($compatible as $item)
                                        <div class="compatible_item_area">
                                            <div class="compatible_item">
                                                <img src="{{ asset('public/upload/game/compatible/'.$item->img) }}" class="" alt="" style="width:24px;">
                                                <span>{{ $item->name }}</span>
                                                <button class="btn_transparent btn_delete_compatible_prev_item" data-id="{{ $item->id }}"><i class="fas fa-times"></i></button>
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

    <div class="modal fade" id="editCategory" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">  
                    <div class="w-100 pos_rel">
                       <h3 class="fs-20">Edit Category</h3>
                    </div>                
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control input_category_name">
                    <input type="hidden" class="form-control input_category_id">
                </div>   
                <div class="modal-footer">
                    <button type="button" class="btn btn_cancel btn_cancel_edit" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn_green btn_modal_main_edit">Submit</button>
                </div>               
            </div>
        </div>
    </div>  
@endsection