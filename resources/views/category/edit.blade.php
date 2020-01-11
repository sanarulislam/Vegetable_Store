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
                    <h5 class="card-title">Enter New Category</h5>


				</div>
				<div class="card-body">
                        <form class="form-horizontal" action="{{route('category.update',$category->id)}}" method='post'>
                            @csrf



                          <div class="form-group">
                              <label class="control-label col-sm-2" for="category_name">Category name:</label>
                              <div class="col-sm-10">
                                <input type="text " class="form-control" id="category_name" placeholder="Enter category_name" value="{{$category->category_name}}" name="category_name">
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
