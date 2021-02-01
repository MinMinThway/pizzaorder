<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->

    	<div class="row">
    		@foreach($categories as $category)
	     	<div class="col-md-3">		
	     		<div class="card">
	     			<div class="card-header">
	     				<h3 class="text-dark">{{$category->name}}</h3>
	     			</div>
	     			<div class="card-body">
	     				<img src="{{$category->photo}}" width="100%" height="100%" class="img-fluid"> 
	     			</div>
	     		</div>
	     		<div class="card-footer">
	     			 <a href="{{route('menu',$category->id)}}" class="btn btn-outline-primary btn-lg text-center w-100" >More</a> 
	     		</div>
	     		
	     	</div>
     		@endforeach
    	</div>

</div>