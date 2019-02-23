@extends('template.master')
@section('styles')
    .container {
        margin-top: 50px;
    }
    #select {
        text-align: center;
    }
@endsection
@section('boys')
    nav-link active
@endsection
@section('girls')
    nav-link
@endsection
@section('unisex')
    nav-link
@endsection
@section('content')

    {{-- we will use this to display the data. since this is the index page it will display
    the latest products --}}
   {{-- <div class="container" style="text-align: center; margin-top: 50px;">
            <div class="row">
                <div class="col-sm">
                One of three columns
                </div>
                <div class="col-sm">
                One of three columns
                </div>
                <div class="col-sm">
                One of three columns
                </div>
            </div>
        </div> --}}
    
@endsection