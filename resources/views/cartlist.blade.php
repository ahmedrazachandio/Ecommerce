

@extends('master')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-sm-10">
                <div class="trending_wraper">
                    <h2>Cart List </h2>
                        
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
                                    <button class="btn btn-warning">Remove From Cart</button>
                                    
                                </div>
                            </div>
                        @endforeach                  
                </div>
            </div>
        </div>
</div>

@endsection