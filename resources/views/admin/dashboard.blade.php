@extends('layouts.admin')

@section('content')

<section class="content mt-2">
    <div class="container-fluid">
    
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Game Title</td>
                        <td>Price</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1
                    @endphp
                    @foreach ($games as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td><a href="">{{ $item->title }}</a></td>
                            <td>{{ $item->price }}</td>
                            <td>
                                
                                <select name="" class="select_game_status" data-id="{{ $item->id }}">
                                    <option value="1" @if($item->status == '1') selected @endif>Publish</option>    
                                    <option value="0" @if($item->status == '0') selected @endif>Pending</option>    
                                </select>                        
                            </td>
                            <td>
                                <button data-id="{{ $item->id }}" class="btn_transparent col-green btn_edit_game"><i class="far fa-edit" aria-hidden="true"></i></button>
                                <button data-id="{{ $item->id }}" class="btn_transparent btn_delete_game col-red"><i class="far fa-trash-alt" aria-hidden="true"></i></button> 
                            </td>
                        </tr>
                        @php
                            $i=$i+1;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
    <form action="{{ route('admin.games') }}" class="form_edit_game d-none" method="get">
        <input type="hidden" value="" name="id" class="form_edit_game_id">
    </form>
</section>

@endsection
