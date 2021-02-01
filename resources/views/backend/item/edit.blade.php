@extends('backendmaster');
@section('content');

	   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Item Listings</h1>
        </div>
        <a href="{{route('items.index')}}" class="btn btn-primary ">Back</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Item Edit Table</h3>
            <form action="{{route('items.update',$item->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name"  value="{{$item->name}}" class="form-control">
              </div>
              <div class="form-group">
                <label for="codeno">Codeno</label>
                <input type="text" id="codeno" name="codeno" value="{{$item->codeno}}" class="form-control @error('codeno') is-invalid @enderror">
                @error('codeno')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
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
                    <img src="{{$item->photo}}" width="100px" height="100px" class="img-fluid">
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                     <input type="file" id="photo" name="photo" class="form-control-file">
                  </div>
                </div>
                </div>

                 <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" value="{{$item->price}}" class="form-control @error('price') is-invalid @enderror">
                    @error('price')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
              </div>

              <div class="form-group">
                    <label for="discount">Discount</label>
                    <input type="text" id="discount" name="discount" value="{{$item->discount}}" class="form-control @error('discount') is-invalid @enderror">
                    @error('discount')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
              </div>

              <div class="form-group">
                    <label for="discount">Description</label>
                    <input type="text" id="description" name="description" value="{{$item->description}}" class="form-control @error('description') is-invalid @enderror">
                    @error('description')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
              </div>

               <div class="form-group">
                <label for="subcategory_id">Subcategory_Name</label>
                  <select name="subcategory_id" class="form-control">
                  @foreach($subcategories as $subcategory)
                    <option value="{{$subcategory->id}}" {{ $subcategory->id == $item->subcategory_id ? 'selected' : '' }}>{{$subcategory->name}}</option>
                  @endforeach
                </select>
              </div>

               <div class="form-group">
                <label for="brand_id">Brand_Name</label>
                 <select name="brand_id" class="form-control">
                  @foreach($brands as $brand)
                    <option value="{{$brand->id}}" {{ $brand->id == $item->brand_id ? 'selected' : '' }}>{{$brand->name}}</option>
                  @endforeach
                </select>
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