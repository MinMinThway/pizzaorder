@extends('backendmaster');
@section('content');

	   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Subcategory Listings</h1>
        </div>
        <a href="{{route('subcategories.index')}}" class="btn btn-primary ">Back</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Subcategory Edit Table</h3>
            <form action="{{route('subcategories.update',$subcategory->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name"  value="{{$subcategory->name}}" class="form-control">
              </div>
              <div class="form-group">
                <label for="photo">Category_Name</label>
                <select class="form-control" name="category_id">
                 @foreach($categories as $category)
                    <option value="{{$category->id}}" {{ $category->id == $subcategory->category_id ? 'selected' : '' }}>{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-success" name="sub" value="Update">
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
    <!-- Esse

@endsection