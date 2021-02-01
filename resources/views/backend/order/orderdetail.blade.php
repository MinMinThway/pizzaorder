@extends('backendmaster');
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-file-text-o"></i> Invoice</h1>
          <p>A Printable Invoice Format</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li ><a href="{{route('orders.index')}}" class="btn btn-info">Back</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h2 class="page-header"><i class="fa fa-globe"></i> Vali Inc</h2>
                </div>
                <div class="col-6">
                  <h5 class="text-right">Date:{{$order->orderdate}}</h5>
                </div>
              </div>
            
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Qty</th>
                        <th>Item_ame</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                      </tr>
                    </thead>
                    <tbody>
                    	
                      @foreach($order->items as $item)
                      @php
                    		$qty=$item->pivot->qty;
                    		$subtotal=$item->price*$qty;
                    		$total=0;
                    	@endphp
                      <tr>
                        <td>{{$qty}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$subtotal}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row d-print-none mt-2">
                <div class="col-12 text-right"><a class="btn btn-primary" href="{{route('orders.create','id='.$order->id)}}" target="_blank"><i class="fa fa-print"></i> Confirm</a></div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </main>
@endsection