@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        
        <table class="table">
            
            <tbody>
              <tr>
                
                <td>Amount</td>
                <td>$ {{$total}}</td>
                
              </tr>
              <tr>
               
                <td>tax</td>
                <td>$ 0</td>
                
              </tr>
              <tr>
                
                <td>Delivery Charge</td>
                <td>$ 10</td>
                
              </tr>
              <tr>
                
                <td>Total Amount</td>
                <td>$ {{$total+10}}</td>
                
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="form-group">
                  
                  <textarea name="address" placeholder="Enter your Address" class="form-control"></textarea>
                  
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Mehtod</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>payment on delivery</span> <br> <br>
                   </div>
               
                <button type="submit" class="btn btn-primary">Order Now</button>
              </form>
          </div>
    </div>
    </div>
 

@endsection