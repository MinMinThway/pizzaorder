@extends('backendmaster');
@section('content');

	   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Category Listings</h1>
        </div>
        <a href="{{route('categories.create')}}" class="btn btn-primary ">Create New</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Category List Table</h3>
            <div class="table-responsive">
              <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	@php 
                		$i=1;
                	@endphp
                	@foreach($categories as $category)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$category->name}}</td>
                    <td><img src="{{asset($category->photo)}}" width="100px" height="100px"></td>
                    <td>
                    	<a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning btn-sm">Edit</a>
                    	<form action="{{route('categories.destroy',$category->id)}}" method="POST" class="d-inline-block" onsubmit=" return confirm('Are you sure')">
                    		@csrf
                    		@method('DELETE')
                    		<input type="submit" class="btn btn-danger btn-sm"  value="Delete">
                    	</form>
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