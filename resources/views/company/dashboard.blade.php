@extends('layouts.company')

@section('content')

<section class="content mt-2">
    <div class="container-fluid">
    
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>User Name</td>
                        <td>Email</td>                        
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=1
                    @endphp
                    @foreach ($users as $item)
                        <tr>
                            <td>{{ $i }}</td>
                            <td><a href="">{{ $item->name }}</a></td>
                            <td>{{ $item->email }}</td>                           
                        </tr>
                        @php
                            $i=$i+1;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
</section>

@endsection
