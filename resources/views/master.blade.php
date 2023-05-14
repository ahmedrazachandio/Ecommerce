<!DOCTYPE html>
<html lang="eng">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>E Comm</title>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        {{ View::make('header')}}

        
        @yield('content')

        {{ View::make('footer')}}

    </body>
    <style>
        .coustom-login{
            height: 500px;
            padding-top: 100px;
        }
        .coustom-product{
            height: 600px;
        }
        img.slider_img{
            height: 500px !important;
        }
        .slider_text{
            background-color: #24465454 !important;
        }
        .trending_img{
            height: 100px;
        }
        .trending_item{
            float: left;
            width: 20%;
        }
        .trending_wraper{

            margin-top: 100px;
        }
        .trending_wrapper{
            margin: 20px;
        }
        .detail_img{
            height: 200px;
        }
        .search_box{
            width: 500px !important;
        }

    </style>

</html>