@extends('backendmaster');
@section('content');

	   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Brands Listings</h1>
        </div>
        <a href="{{route('brands.create')}}" class="btn btn-primary ">Create New</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Brands List Table</h3>
            <div class="table-responsive">
              <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                   
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	@php
                    $i=1;
                  @endphp
                  @foreach($brands as $brand)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>{{$brand->name}}</td>
                      <td>
                        <a href="{{route('brands.edit',$brand->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('brands.destroy',$brand->id)}}" method="POST" onclick="return confirm('Are you sure?')" class="d-inline-block">
                          @csrf
                          @method('DELETE')
                          <input type="submit" name="submit" value="Delete" class="btn btn-danger">
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