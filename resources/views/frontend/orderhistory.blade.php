@extends('frontendmaster');
@section('content');


    <section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
        	<div class="col-md-12 col-lg-12" id="Cart">
        			<table class="table" width="100%">
		        		<thead>
		        			<th>No</th>
		        			<th>Date</th>
		        			<th>Amount</th>
		        			<th>Status</th>
		        		</thead>
		        		<tbody>
                  @php
                    $i=1;
                  @endphp
		        			@foreach($orders as $order)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$order->orderdate}}</td>
                      <td>{{$order->total}}</td>
                      @if($order->status==0)
                      <td><button class="btn btn-warning btn-sm">Pending</button></td>
                    @elseif($order->status==1)
                      <td><button class="btn btn-success btn-sm">Confirm</button></td>
                    @else
                      <td><button class="btn btn-danger btn-sm">Delete</button></td>
                    @endif
                    </tr>
                  @endforeach
		        		</tbody>
        	</table>
        	</div>
        </div>
      </div>
    </section>

@endsection
