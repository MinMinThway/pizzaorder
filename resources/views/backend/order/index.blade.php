@extends('backendmaster');
@section('content');

     <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Order Listings</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Order List Table</h3>
            <div class="table-responsive">
              <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Order_No</th>
                    <th>Total</th>
                    <th>Order Date</th>
                    <th>Customer_Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php 
                    $i=1;
                  @endphp
                  @foreach($orders as $order)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$order->orderno}}</td>
                    <td>{{$order->total}}</td>
                    <td>{{$order->orderdate}}</td>
                    <td>{{$order->user->name}}</td>
                    @if($order->status==0)
                      <td><button class="btn btn-warning btn-sm">Pending</button></td>
                    @elseif($order->status==1)
                      <td><button class="btn btn-success btn-sm">Confirm</button></td>
                    @else
                      <td><button class="btn btn-danger btn-sm">Delete</button></td>
                    @endif
                    <td>   
                      <a href="{{route('orders.show',$order->id)}}" class="btn btn-info">Detail</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Esse

@endsection