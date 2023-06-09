

@extends('master')
@section('content')

<div class="container coustom-product">
    <div class="row">
            <div style="clear:both" id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
            <div class="carousel-inner">
                
                @foreach($products as $item)
                    <div class="item {{$item['id']==1?'active':''}}">
                        <a href="detail/{{$item['id']}}">
                            <img class="slider_img" src="{{$item['gellary']}}" alt="Chania">
                            <div class="carousel-caption slider_text">
                                <h3>{{$item['name']}}</h3>
                                <p>{{$item['description']}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            
                

            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        <div class="trending_wraper">
            <h1>Trending Products</h1>
            <div class="">
                
                @foreach($products as $item)
                    <div class="trending_item">
                        <a href="detail/{{$item['id']}}">

                        <img class="trending_img" src="{{$item['gellary']}}">
                        <div class="">
                            <h3>{{$item['name']}}</h3>
                        </div>
                        </a>
                    </div>
                @endforeach
            
                

            </div>
        </div>
       
    </div>
</div>

@endsection