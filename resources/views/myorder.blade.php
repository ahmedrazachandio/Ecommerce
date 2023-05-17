

@extends('master')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-sm-10">
                <div class="trending_wraper">
                    <h2>Orders List </h2>
                        
                        @foreach($orders as $item)
                            <div class="row searched_item cart_lis_divider">
                                <div class="col-sm-3">
                                    <a href="detail/{{$item->id}}">
                                        <img class="trending_img" src="{{$item->gellary}}">
                                    </a>
                                </div>
                                <div class="col-sm-3">
                                        <div class="">
                                        <h2>{{$item->name}}</h2>
                                        <h5>Delivery Status : {{$item->status}}</h5>
                                        <h5>Payment Status : {{$item->payment_status}}</h5>
                                        <h5>Payment Method : {{$item->payment_method}}</h5>
                                        <h5>Delivery Address : {{$item->address}}</h5>
                                        </div>
                                </div>
                                <div class="col-sm-3">
                                    {{-- <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a> --}}
                                    
                                </div>
                            </div>
                        @endforeach  
                </div>
            </div>
        </div>
</div>

@endsection