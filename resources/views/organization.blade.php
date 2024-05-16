@extends('layouts')
@section('title','Dashboard')

@section('content')
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->	
			<div class="page-titles">
				<ol class="breadcrumb">
					<li><h5 class="bc-title">Organization</h5></li>
					<li class="breadcrumb-item"><a href="index-2.html">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						Home</a>
					</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Organization</a></li>
				</ol>
				<a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects style-1">
									<div class="tbl-caption">
										<h4 class="heading mb-0">Organization</h4>
										<div>
											<a class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">+ Add Organization</a>
										</div>
									</div>
									<table id="empoloyees-tblwrapper" class="table">
										<thead>
											<tr>
												<th>Action</th>
												<th>Orgname</th>
												<th>Auth_per_name</th>
												<th>Auth_Contact_Number</th>
												<th>Auth_Email</th>
												<th>Address</th>
												<th>City</th>
												<th>Gst_number</th>
												<th>Status</th>
											</tr>
										</thead>
										<tbody>
										@foreach ($organizations as $row)
											<tr>
												<td> <form action="{{route('organization.destroy',$row->orgid)}}" method="POST">
													<a data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1"class="btn btn-xs sharp btn-primary">Edit</a>
													<button type="submit" class="btn btn-xs sharp btn-danger remove">Delete</button>
													@csrf
													@method('DELETE')
												</form></td>
												<td>{{$row->orgname}}</td>
												<td>{{$row->auth_per_name}}</td>
												<td>{{$row->auth_contact_number}}</td>
												<td>{{$row->auth_email}}</td>
												<td>{{$row->address}}</td>
												<td>{{$row->city}}</td>
												<td>{{$row->gst_number}}</td>
												<td>{{$row->status}}</td>
											</tr>
											@endforeach	
										</tbody>
										
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
        </div>
		
        <!--**********************************
            Content body end
        ***********************************-->


		<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample">
		  <div class="offcanvas-header">
		  <h5 class="modal-title" id="#gridSystemModal">Add Organization </h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
				<i class="fa-solid fa-xmark"></i>
			</button>
		  </div>
		  <div class="offcanvas-body">
			<div class="container-fluid">
				
				<form  action="{{route('organization.store')}}" method="POST" >
					@csrf
					<div class="row">
						
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput2" class="form-label">OrgName<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="xampleFormControlInput2" name="orgname">
						</div>	
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput3" class="form-label">Auth_per_Name<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="xampleFormControlInput3" name="auth_per_name">
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput4" class="form-label">Auth_Contact_Number<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="xampleFormControlInput4"name="auth_contact_number">
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput4" class="form-label">Auth_Email<span class="text-danger">*</span></label>
							<input type="email" class="form-control" id="xampleFormControlInput4"name="auth_email">
						</div>
						<div class="col-xl-12 mb-3">
							<label class="form-label">Address<span class="text-danger">*</span></label>
							<textarea rows="3" class="form-control" name="address"></textarea>
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput4" class="form-label">City<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="xampleFormControlInput4" name="city">
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput4" class="form-label">Gst_number<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="xampleFormControlInput4"name="gst_number">
						</div>
						<div class="col-xl-12 mb-3">
							<label for="exampleFormControlInput4" class="form-label">Status<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="xampleFormControlInput4" name="status">
						</div>	
					</div>
					<div>
						<button class="btn btn-danger light ms-1">Cancel</button>
						<button class="btn btn-primary me-1">Submit</button>
					</div>
				</form>
			  </div>
		  </div>
		</div>			
		
		<div class="offcanvas offcanvas-end customeoff" tabindex="-1" id="offcanvasExample1">
		  <div class="offcanvas-header">
		  <h5 class="modal-title" id="#gridSystemModal1">Edit Organization</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
				<i class="fa-solid fa-xmark"></i>
			</button>
		  </div>
		  <div class="offcanvas-body">
			<div class="container-fluid">
				{{-- <form  action="#" method="POST" >
					@csrf
					@method('PUT')
					<input type="hidden" name="orgid" value="{{$organizations->orgid}}">
					<div class="row">
						
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput2" class="form-label">OrgName<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="xampleFormControlInput2" name="orgname" value="{{$organizations->orgname}}">
						</div>	
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput3" class="form-label">Auth_per_Name<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="xampleFormControlInput3" name="auth_per_name" value="{{$organizations->auth_per_name}}>
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput4" class="form-label">Auth_Contact_Number<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="xampleFormControlInput4"name="auth_contact_number" value="{{$organizations->auth_contact_number}} >
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput4" class="form-label">Auth_Email<span class="text-danger">*</span></label>
							<input type="email" class="form-control" id="xampleFormControlInput4"name="auth_email"  value="{{$organizations->auth_email}}>
						</div>
						<div class="col-xl-12 mb-3">
							<label class="form-label">Address<span class="text-danger">*</span></label>
							<textarea rows="3" class="form-control" name="address" value="{{$organizations->address}}></textarea>
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput4" class="form-label">City<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="xampleFormControlInput4" name="city" value="{{$organizations->city}}>
						</div>
						<div class="col-xl-6 mb-3">
							<label for="exampleFormControlInput4" class="form-label">Gst_number<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="xampleFormControlInput4"name="gst_number" value="{{$organizations->gst_number}}>
						</div>
						<div class="col-xl-12 mb-3">
							<label for="exampleFormControlInput4" class="form-label">Status<span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="xampleFormControlInput4" name="status" value="{{$organizations->status}}>
						</div>	
					</div>
					<div>
						<button class="btn btn-danger light ms-1">Cancel</button>
						<button class="btn btn-primary me-1">Submit</button>
					</div>
				</form> --}}
			  </div>
		  </div>
		</div>	
		<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-center">
			<div class="modal-content">
			  <div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel1">Invite Employee</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>

					
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
@endsection
		
		