@extends('backendmaster');
@section('content');

	   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Brands Listings</h1>
        </div>
        <a href="{{route('brands.index')}}" class="btn btn-primary ">Back</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Brand Edit Table</h3>
            <form action="{{route('brands.update',$brand->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{$brand->name}}" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="photo">Photo</label>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                  </li>
                </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                      <img src="{{$brand->photo}}" width="100px" height="100px">
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                       <input type="file" id="photo" name="photo"  value=""  class="form-control-file  @error('photo') is-invalid @enderror">
                                   @error('photo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                    </div>
                  </div>
                
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