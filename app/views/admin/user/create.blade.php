@extends('admin.layouts.master')

@section('page-title')
	Add New User
@endsection

@section('breadcrumb')
	<li>
        <a href="/admin/user">Users</a>
        <i class="fa fa-angle-right"></i>
    </li>	
	<li>
		<span>Add New</span>
	</li>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
            <!-- BEGIN Portlet PORTLET-->
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-home"></i>
                        <span class="caption-subject bold uppercase"> Add New User</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    @include('admin.layouts._partials.errors')
                    {{ Form::open(['route' => 'admin.user.store', 'method' => 'post']) }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-body">

                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Email</label>
                                        {{ Form::text('email', null, ['class' => 'form-control']) }}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        {{ Form::password('password', ['class' => 'form-control']) }}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Re-type Password</label>
                                        {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Status</label>	
                                        {{ Form::select('user_status', ['' => 'Select Status', 1 => 'Active', 0 => 'Deactive'], null, ['class' => 'form-control']) }}
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="#" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                    {{ Form::close() }}
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END Portlet PORTLET-->
        </div>
        </div>
@endsection