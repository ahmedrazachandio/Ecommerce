

@extends('master')
@section('content')

<div class="container coustom-product">
    <div class="row">
        <div class="col-sm-6">
            <table class="table table-stripped">
                <tbody>
                    <tr>
                        <td>Price</td>
                        <td>{{$total}} Pkr</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>0 Pkr</td>
                    </tr>
                    <tr>
                        <td>Delivery Charges</td>
                        <td>100 Pkr</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>{{$total+100}} Pkr</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
            <form action="orderplace" method="POST">
                @csrf
                <div class="form-group">
                    <textarea type="text" placeholder="Enter your address" name="address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <p>
                         <input type="radio" value="cash" class="" name="payment">
                         <span>Online Payment</span>
                    </p>
                    <p>
                        <input type="radio" value="cash" class="" name="payment">
                        <span>JazzCash and easy paisa Payment</span>
                   </p>
                   <p>
                    <input type="radio" value="cash" class="" name="payment">
                    <span>Cash on Delivery</span>
               </p>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
            </form>
         </div>
     </div>
</div>

@endsection