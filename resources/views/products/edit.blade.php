@extends('layouts.app')
@section('css')
@parent
<link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="container mt-3 mb-3">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header header-elements-inline">
                    <h5 class="card-title">Product Info Update</h5>


        </div>
        <div class="card-body">
                        <form class="form-horizontal" action="{{route('product.update',$product->id)}}" method='post'>
                            @csrf



                          <div class="form-group">
                              <label class="control-label col-sm-2" for="vegetables_name">Vegetable name:</label>
                              <div class="col-sm-10">
                                <input type="text " class="form-control" id="vegetables_name" placeholder="Enter vegetables_name" value="{{$product->vegetables_name}}" name="vegetables_name">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-2" for="vegetables_quantity">Vegetable quantity :</label>
                              <div class="col-sm-10">
                                <input type="text " class="form-control" id="vegetables_quantity" placeholder="Enter vegetables_quantity" value="{{$product->vegetables_quantity}}" name="vegetables_quantity">
                              </div>
                            </div>


                              <div class="form-group">
                              <label class="control-label col-sm-2" for="vegetables_price">Vegetable Price:</label>
                              <div class="col-sm-10">
                                <input type="text " class="form-control" id="vegetables_price" placeholder="Enter vegetables_price" value="{{$product->vegetables_price}}" name="vegetables_price">
                              </div>
                            </div>


                            <div class="form-group">
                              <label class="control-label col-sm-2" for="vegetables_description">Vegetable Description:</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" rows = "2" id="vegetables_description" placeholder="Enter vegetables_description"  name="vegetables_description">{{$product->vegetables_description}}</textarea>
                              </div>
                            </div>











                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Submit</button>
                              </div>
                            </div>



                          </form>
        </div>

      </div>
    </div>
  </div>
  <!-- Basic datatable -->
  <!-- /basic datatable -->
</div>
@endsection

@push('js')

  <!-- Theme JS files -->
  <script src="{{ asset('/global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
  <script src="{{ asset('/js/page/room.js') }}"></script>
@endpush
@extends('layouts.app')
@section('css')
@parent
<link href="{{ asset('assets/css/components.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="container mt-3 mb-3">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header header-elements-inline">
                    <h5 class="card-title">Enter New Product</h5>


        </div>
        <div class="card-body">
                        <form class="form-horizontal" action="{{route('products.store')}}" method='post'>
                            @csrf



                          <div class="form-group">
                              <label class="control-label col-sm-2" for="brand_name">Brand name:</label>
                              <div class="col-sm-10">
                                <input type="text " class="form-control" id="brand_name" placeholder="Enter brand_name" name="brand_name">
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-sm-2" for="product_size"> Product Size:</label>
                              <div class="col-sm-10">
                                <input type="text " class="form-control" id="product_size" placeholder="Enter product_size" name="product_size">
                              </div>
                            </div>


                              <div class="form-group">
                              <label class="control-label col-sm-2" for="product_price">Product Price:</label>
                              <div class="col-sm-10">
                                <input type="text " class="form-control" id="product_price" placeholder="Enter product_price" name="product_price">
                              </div>
                            </div>


                            <div class="form-group">
                              <label class="control-label col-sm-2" for="product_description">Product Description:</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" rows = "2" id="product_description" placeholder="Enter product_description" name="product_description"></textarea>
                              </div>
                            </div>











                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Submit</button>
                              </div>
                            </div>



                          </form>
        </div>

      </div>
    </div>
  </div>
  <!-- Basic datatable -->
  <!-- /basic datatable -->
</div>
@endsection

@push('js')

  <!-- Theme JS files -->
  <script src="{{ asset('/global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
  <script src="{{ asset('/js/page/room.js') }}"></script>
@endpush
