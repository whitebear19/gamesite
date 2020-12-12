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

@endsection
