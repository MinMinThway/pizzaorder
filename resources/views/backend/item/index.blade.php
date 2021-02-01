@extends('backendmaster');
@section('content');

	   <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Item Listings</h1>
        </div>
        <a href="{{route('items.create')}}" class="btn btn-primary ">Create New</a>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Item List Table</h3>
            <div class="table-responsive">
              <table class="table table-striped text-center" id="sampleTable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Codeno</th>
                    <th>Photo</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Description</th>
                    <th>Subcategory_Name</th>
                    
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	@php 
                  use App\Item;
                		$i=1;
                    $items=Item::all();
                	@endphp
                	@foreach($items as $item)
                     <tr>
                      <td>{{$i++}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->codeno}}</td>
                      <td><img src="{{asset($item->photo)}}" width="100px" height="100px"></td>
                      <td>{{$item->price}}</td>
                      <td>{{$item->discount}}</td>
                      <td class="text-left">{{$item->description}}</td>
                      <td>{{$item->subcategory->name}}</td>
                      
                      <td>
                        <a href="{{route('items.edit',$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{route('items.destroy',$item->id)}}" method="POST" class="d-inline-block" onsubmit=" return confirm('Are you sure')">
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
    @section('script')
    <script type="text/javascript" src="{{asset('backend_assets/js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('backend_assets/js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    @endsection
@endsection