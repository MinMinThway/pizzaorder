@extends('backendmaster');
@section('content');

	   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Category Listings</h1>
        </div>
        <a href="{{route('categories.index')}}" class="btn btn-primary ">Back</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Category Create Table</h3>
            <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" id="photo" name="photo"  value="{{old('photo')}}"  class="form-control-file  @error('photo') is-invalid @enderror">
                 @error('photo')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div>
                <input type="submit" class="btn btn-success" name="sub" value="Submit">
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
    <!-- Esse

@endsection