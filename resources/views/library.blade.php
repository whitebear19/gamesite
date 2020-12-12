@extends('layouts.base')

@section('content')
<div class="">
   
    <div class="main">
        <div class="section_library">
            <div class="container pt-3">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>
                                        No
                                    </td>
                                    <td>
                                        Game
                                    </td>
                                    <td>
                                        Price
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1
                                @endphp
                                @if ($games)
                                @foreach ($games as $item)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>
                                            <a href="{{ url('game_detail', $item->get_game->id ) }}">{{ $item->get_game->title }}</a>                                            
                                        </td>
                                        <td>
                                            € {{ $item->get_game->price }}
                                        </td>
                                    </tr>
                                    @php
                                        $i+=1
                                    @endphp
                                @endforeach
                                    
                                @else
                                    <tr>
                                        <td colspan="3">
                                            <p>There is no any purchased yet.</p>
                                        </td>
                                    </tr>
                                @endif
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>  
</div>
@endsection
