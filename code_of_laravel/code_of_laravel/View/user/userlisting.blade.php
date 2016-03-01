@extends('app')
@section('pagecss')
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{ asset('/public/assets/global/plugins/select2/select2.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('/public/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
<!-- END PAGE LEVEL STYLES -->
@stop
@section('content')

			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Users <small>User listing.You can add,edit,delete user.</small>
			</h3>
             @if(Session::has('message'))
            <div class="alert alert-success">
										<button class="close" data-close="alert"></button>
									{{ Session::get('message') }}	
									</div>
                   @endif  
			<div class="page-bar">
				<!--<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Data Tables</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="javascript:vaoi(0)">User table</a>
					</li>
				</ul>-->
				<!--<div class="page-toolbar">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
						Actions <i class="fa fa-angle-down"></i>
						</button>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
				</div>-->
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>User Table
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<a href="{{ route('user_create')}}"><button id="" class="btn green">
											Add New <i class="fa fa-plus"></i>
											</button></a>
                                            
										</div>
									</div>
									<div class="col-md-6">
										<div class="btn-group pull-right">
											<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right">
												<li>
													<a href="javascript:;">
													Print </a>
												</li>
												<li>
													<a href="javascript:;">
													Save as PDF </a>
												</li>
												<li>
													<a href="javascript:;">
													Export to Excel </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
                            <th>
									 First Name
								</th>
								<th>
									 Last Name
								</th>
								<th>
									 Email
								</th>
                                <th>
									 Phone
								</th>
								
                                <th>
									 Address
								</th>
								
								<th colspan="2">
								
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                            @foreach($user as $user)
							<tr>
                            <td>
									 {{$user['first_name']}}
								</td>
								<td>
									 {{$user['last_name']}}
								</td>
								<td>
									 {{$user['email']}}
								</td>
                                <td>
									 {{$user['phone']}}
								</td>
								
								<td class="center">
									 {{$user['address']}}
								</td>
								<td colspan="2">
									<a class="edit" href="{{route('user_edit',$user->id)}}">
									<i class="fa fa-edit"></i> </a>&nbsp;&nbsp;
							
									<a class="delete" href="javascript:;">
									<i class="fa fa-remove"></i> </a>&nbsp;&nbsp;
                                    @if($user['status']==1)
                                    <a class="delete" href="{{url('/users/block')}}/{{$user['id']}}/0">
                                    
									<i class="fa fa-lock"></i> 
                                                     </a>
                                     @else
                                       <a class="delete" href="{{url('/users/block')}}/{{$user['id']}}/1">
                                    
									<i class="fa fa-unlock"></i> 
                                                     </a>
                                      @endif               
                                                     
								</td>
							</tr>
							
							@endforeach
							
							
							
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
	
@stop    
@section('pagejavascript')    
 <!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="{{ asset('/public/assets/global/plugins/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/public/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/public/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
<!-- END PAGE LEVEL PLUGINS -->   
@stop