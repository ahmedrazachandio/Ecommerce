

@extends('master')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-sm-10">
                <div class="trending_wraper">
                    <h2>Cart List </h2>
                    <a href="/ordernow" class="btn btn-success">Order Now</a><br><br>
                        
                        @foreach($products as $item)
                            <div class="row searched_item cart_lis_divider">
                                <div class="col-sm-3">
                                    <a href="detail/{{$item->id}}">
                                        <img class="trending_img" src="{{$item->gellary}}">
                                    </a>
                                </div>
                                <div class="col-sm-3">
                                        <div class="">
                                        <h2>{{$item->name}}</h2>
                                        <h5>{{$item->description}}</h5>
                                        </div>
                                </div>
                                <div class="col-sm-3">
                                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
                                    
                                </div>
                            </div>
                        @endforeach  
                        <a href="/ordernow" class="btn btn-success">Order Now</a><br><br>
                </div>
            </div>
        </div>
</div>

@endsection