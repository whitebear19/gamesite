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
   test
</div>
<form action="{{ route('games') }}" method="get" class="form_select_sortby">
    <input type="hidden" value="" name="type">
    <input type="hidden" value="" name="id">
</form>
@endsection
