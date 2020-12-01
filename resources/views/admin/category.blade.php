@extends('layouts.admin')

@section('content')
   <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mt-5">
                        <div class="card card-primary">
                            <div class="card-header">
                              <h3 class="card-title">New Category</h3>
                            </div>
                           
                            <form method="POST" id="form_new_category">
                            @csrf
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="">Main Category</label>
                                  <input type="text" name="name" class="form-control required" placeholder="Enter Main Category">
                                </div>
                              </div>              
                              <div class="card-footer">
                                <button type="button" class="btn btn-block btn-primary btn_store_mainCategory">Register</button>
                              </div>
                            </form>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-6">
                    <div class="mt-5">
                        <div class="card card-success">
                            <div class="card-header">
                              <h3 class="card-title">View Category List</h3>
                            </div>
                            <div class="accordion-group" style="padding:20px;">
                                @foreach ($category as $item)
                                    <section class="accordion-group__accordion ">
                                        <header class="accordion-group__accordion-head pos_rel">
                                            <h3 class="accordion-group__accordion-heading">
                                                <button type="button" class="accordion-group__accordion-btn"><b>{{ $item->name }}:</b></button>
                                            </h3>
                                            
                                            <div class="dropdown edit_category_part">
                                                <button class="btn btn_dropdown btn_transparent btn_category_action" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h" aria-hidden="true"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown_custom_position"> 
                                                    <button data-id="{{ $item->id }}" data-name="{{ $item->name }}" class="btn_transparent dropdown-item btn_edit_category"><i class="far fa-edit" aria-hidden="true"></i> Edit</button>
                                                    <button data-id="{{ $item->id }}" class="btn_transparent dropdown-item btn_delete_category"><i class="far fa-trash-alt" aria-hidden="true"></i> Delete</button>                                                   
                                                </div>
                                            </div>

                                        </header>                                       
                                    </section>
                                @endforeach                                         
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