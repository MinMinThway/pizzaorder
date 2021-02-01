@extends('frontendmaster');
@section('content');


<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel">Check Out Complete</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <h3>Thaks You</h3> 
  </div>
  <div class="modal-footer">
    <a href="{{route('index')}}">OK</a>
  </div>
</div>
</div>
</div>



    <section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
        	<div class="col-md-12 col-lg-12" id="Cart">
        			<table class="table" width="100%">
		        		<thead>
		        			<th>No</th>
		        			<th>Item_Name</th>
		        			<th>Price</th>
		        			<th>Qty</th>
		        			<th>Subtotal</th>
		        		</thead>
		        		<tbody id="Shopping">
		        			
		        		</tbody>
		        		<tfoot id="total">
		        			
		        		</tfoot>
        	</table>
          <textarea class="form-control" id="note" placeholder="Any Request..."></textarea>
           @guest
                <a href="#"  class="btn btn-secondary btn-block mainfullbtncolor checkoutBtn"> 
                  Login To Check Out 
                </a>
                @else
                <a href="#"  class="btn btn-secondary btn-block mainfullbtncolor checkoutBtn"> 
                  Check Out 
                </a>
              @endguest
        	</div>
        	<div class="col-md-12 col-lg-12" id="noCart">
        		
        	</div>
        </div>
      </div>
    </section>

@endsection
