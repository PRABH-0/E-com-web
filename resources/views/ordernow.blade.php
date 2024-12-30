@extends('master')
@section('content')

<div class="row m-4">
    <div class="col-sm-3 "></div>
    <div class="col-sm-6 my-3">
        <table class="table table-striped">
            
            <tbody>
              <tr>
                <td>Price</td>
                <td>Total : {{ $total }} INR</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>0 %</td>
              </tr>
              <tr>
                <td>Delivery charges</td>
                <td>100</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>{{ $total + 100 }} INR</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form method="POST" action="orderplace">
                @csrf
                <div class="form-group">
                    <label for="">Address :-</label>
                  <textarea placeholder="Enter Your Address" name="address" class="form-control" ></textarea>
                </div>
                <div class="form-group">
                    <label for="">Payment Method</label>
                  <p>
                    <input type="radio" value="cash"  name="payment"> <span>Online Payment</span><br>
                    <input type="radio" value="cash"  name="payment"> <span>EMI payment</span><br>
                    <input type="radio" value="cash"  name="payment"> <span>Payment on Delivery</span>
                  </p>
                </div>
                
                <button type="submit" class="btn btn-success my-3">Order Now</button>
              </form>
          </div>
    </div>
</div>

@endsection
