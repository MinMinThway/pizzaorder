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
            <h3 class="tile-title">Category Edit Table</h3>
            <form action="{{route('categories.update',$category->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name"  value="{{$category->name}}" class="form-control">
              </div>
              <div class="form-group">
                <label for="photo">Photo</label>
                <ul class="nav nav-tabs my-3" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <img src="{{$category->photo}}" width="100px" height="100px" class="img-fluid">
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <input type="file" id="photo" name="photo" class="form-control-file">
                  </div>
                </div>
                </div>
                <div>
                <input type="submit" class="btn btn-success" name="sub" value="Update">
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
    <!-- Esse

@endsection