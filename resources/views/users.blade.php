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
                    {{-- <a href="/add" class="card-title btn btn-success"></a>
 --}}
				</div>
				<div class="card-body">
					<h5>All Usrs</h5>
				</div>
				<table class="table datatable-basic">
					<thead>
						<tr>
							<th>User name</th>
							<th>User Email</th>
							<th>User Password</th>

							<th>Action</th>


							<!--th>Status</th-->

						</tr>
					</thead>
					<tbody>

                        @foreach($users as $user)
						<tr>


							<td>{{$user->name}}</td>
							<td>{{$user->eamil}}</td>
							<td>{{$user->password}}</td>

							<td class="text-center">
								<div class="list-icons">
									<div class="dropdown">
										<a href="#" class="list-icons-item" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
                                           {{--  <a href="/detail/{{ $room->id }}" class="dropdown-item">Details</a> --}}

											<a href="user/delete/{{$user->id}}" class="dropdown-item"> Delete</a>

										</div>
									</div>
								</div>
							</td>



                        </tr>
                        @endforeach

					</tbody>
				</table>
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