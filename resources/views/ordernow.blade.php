@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Amount</td>
                <td>$ {{$total}}</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Delivery</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Total Amount</td>
                <td>$ {{$total + 10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST">
              @csrf
                <div class="mb-3">
                  <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Payment Method</label> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>online payment</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br><br>
                </div>
                <button type="submit" class="btn btn-primary">Order Now</button>
              </form>
          </div>
    </div>
</div>
@endsection