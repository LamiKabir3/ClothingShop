@extends('template.master')

     
@section('boys')
    nav-link 
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
   <div class="container" style="text-align: center; margin-top: 50px;">
            <div class="row">
                @foreach($products as $product)
                <div class="col-sm">
                {{$product->name}}
                </div>
                @endforeach 
            </div>
        </div>

@endsection
     
