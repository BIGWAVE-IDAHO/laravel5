@extends('app')
@section('pagecss')
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{asset('/public/assets/global/plugins/select2/select2.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('/public/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('/public/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/public/assets/global/plugins/bootstrap-datepicker/css/datepicker.css')}}"/>
<!-- END PAGE LEVEL SCRIPTS -->

@stop
@section('content')

			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Add User
			</h3>
            <div class="alert alert-success" style="display:none">
										<button class="close" data-close="alert"></button>
									Profile update sucessfully
									</div>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="{{url('/')}}">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="">My Account</a>
						<i class="fa fa-angle-right"></i>
					</li>
					
				</ul>
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
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>My Account Settings
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<!--<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>-->
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="{{url('users/myaccount')}}" id="form_sample_2" class="form-horizontal" method="post">
                             <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
								<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Email <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											{{$me['email']}}
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">First Name <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="first_name" data-required="1" class="form-control" value="{{$me['first_name']}}"/>
										</div>
									</div>
                                    <div class="form-group">
										<label class="control-label col-md-3">Last Name <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="last_name" data-required="1" class="form-control"  value="{{$me['last_name']}}"/>
										</div>
									</div>
									
									<!--<div class="form-group">
										<label class="control-label col-md-3">Password <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input name="password" type="password" class="form-control" data-required="1"/>
											
										</div>
									</div>-->
                                    
                                    
                                   
									<div class="form-group">
										<label class="control-label col-md-3">Phone 
										</label>
										<div class="col-md-4">
											<input name="phone" type="text" class="form-control"  value="{{$me['phone']}}"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Address 
										</label>
										<div class="col-md-4">
											<input name="address" type="text" class="form-control"  value="{{$me['address']}}" />
										</div>
									</div>
									
									
									
									
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<button type="button" class="btn default" onclick="window.location.href='{{url('/users')}}'">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
                      
                        
                        
					</div>
					<!-- END VALIDATION STATES-->
				</div>
			</div>
            
			
			
			
			<!-- END PAGE CONTENT-->
	
@stop    
@section('pagejavascript')  
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="{{asset('/public/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/public/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/public/assets/global/plugins/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/public/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('/public/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
<script type="text/javascript" src="{{asset('/public/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>
<script type="text/javascript" src="{{asset('/public/assets/global/plugins/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" src="{{asset('/public/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js')}}"></script>
<script type="text/javascript" src="{{asset('/public/assets/global/plugins/bootstrap-markdown/lib/markdown.js')}}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="{{asset('/public/assets/admin/pages/scripts/form-validation.js')}}"></script>
<script>
jQuery(document).ready(function() {   

   FormValidation.init();
});

function ajax_submit()
{
	_token=$('meta[name="csrf-token"]').attr('content')
	$.ajax({
		url:$("#form_sample_2").prop('action'),
		data:$("#form_sample_2").serialize(),
		type:"POST",
		success: function(data){
			   if(data=='true')
			      $(".alert-success").show();
			
			}
	});
}
</script>


@stop