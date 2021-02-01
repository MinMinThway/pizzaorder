@extends('backendmaster');
@section('content');

	   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Sub Listings</h1>
        </div>
        <a href="{{route('subcategories.create')}}" class="btn btn-primary ">Create New</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Subcategory List Table</h3>
            <div class="table-responsive">
              <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category_Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	@php
                  use App\Subcategory;
                    $i=1;
                    $subcategories=Subcategory::orderBy('id', 'DESC')->get();
                  @endphp
                  @foreach($subcategories as $subcategory)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$subcategory->name}}</td>
                    <td>{{$subcategory->category->name}}</td>
                    <td>
                      <a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{route('subcategories.destroy',$subcategory->id)}}" method="POST" class="d-inline-block" onsubmit=" return confirm('Are you sure')">
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
@endsection