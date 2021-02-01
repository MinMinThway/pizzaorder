@extends('backendmaster');
@section('content');

	   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Items Listings</h1>
        </div>
        <a href="{{route('categories.index')}}" class="btn btn-primary ">Back</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Item Create Table</h3>
            <form action="{{route('items.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="codeno">Codeno</label>
                <input type="text" id="codeno" name="codeno" value="{{old('codeno')}}" class="form-control @error('codeno') is-invalid @enderror">
                @error('codeno')
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

               <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" value="{{old('price')}}" class="form-control @error('price') is-invalid @enderror">
                @error('price')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

               <div class="form-group">
                <label for="discount">Discount</label>
                <input type="text" id="discount" name="discount" value="{{old('discount')}}" class="form-control @error('discount') is-invalid @enderror">
                @error('discount')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>

               <div class="form-group">
                  <label for="discount">Description</label>
                  <input type="text" id="description" name="description" value="{{old('description')}}" class="form-control @error('description') is-invalid @enderror">
                  @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                  @enderror
              </div>

               <div class="form-group">
                <label for="subcategory_id">Subcategory_Name</label>
                  <select name="subcategory_id" class="form-control">
                  @foreach($subcategories as $subcategory)
                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                  @endforeach
                </select>
              </div>

               <div class="form-group">
                <label for="brand_id">Brand_Name</label>
                 <select name="brand_id" class="form-control">
                  @foreach($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                  @endforeach
                </select>
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