@extends('layouts.company')

@section('content')

<section class="content mt-2">
    <div class="container-fluid">
    
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="card card_company_create_user">
                    <div class="card-body">
                    <p class="login-box-msg">Add New User</p>
                
                    <form action="" class="form_create_user" method="post">
                    @csrf
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Full name">                        
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" autocomplete="off" name="email" class="form-control" placeholder="Email">                        
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control password1" name="password" placeholder="Password">                        
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control password2" placeholder="Retype password">                        
                        </div>
                        <button type="button" class="btn btn-primary btn-block btn_company_create_user">Register</button>
                    </form>     
                    </div>                
                </div>
            </div>
            
        </div>
        
    </div>   
</section>
<div class="modal fade" id="alertmembership" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="alertmembershipLabel">
            <svg aria-hidden="true" style="width: 24px;height:24px;color:#ee0000;" focusable="false" data-prefix="fal" data-icon="times-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-times-circle fa-w-16 fa-3x"><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 464c-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216 0 118.7-96.1 216-216 216zm94.8-285.3L281.5 256l69.3 69.3c4.7 4.7 4.7 12.3 0 17l-8.5 8.5c-4.7 4.7-12.3 4.7-17 0L256 281.5l-69.3 69.3c-4.7 4.7-12.3 4.7-17 0l-8.5-8.5c-4.7-4.7-4.7-12.3 0-17l69.3-69.3-69.3-69.3c-4.7-4.7-4.7-12.3 0-17l8.5-8.5c4.7-4.7 12.3-4.7 17 0l69.3 69.3 69.3-69.3c4.7-4.7 12.3-4.7 17 0l8.5 8.5c4.6 4.7 4.6 12.3 0 17z" class=""></path></svg>
            You can not create user anymore!
          </h5>
        </div>
        <div class="modal-body">
            <span>Please confirm your plan by clicking <a href='/subscription'>here</a> </span>  
        </div>
        <div class="modal-footer">         
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@endsection
