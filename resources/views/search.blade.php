

@extends('master')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="#">Filter</a>
            </div>
            <div class="col-sm-4">
                <div class="trending_wraper">
                    <h4>Result for Products</h4>
                        
                        @foreach($products as $item)
                            <div class="searched_item">
                                <a href="detail/{{$item['id']}}">
        
                                <img class="trending_img" src="{{$item['gellary']}}">
                                <div class="">
                                    <h2>{{$item['name']}}</h2>
                                    <h5>{{$item['description']}}</h5>
                                </div>
                                </a>
                            </div>
                        @endforeach                  
                </div>
            </div>
        </div>
</div>

@endsection