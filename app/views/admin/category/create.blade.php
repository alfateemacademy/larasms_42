@extends('admin.layouts.master')

@section('page-title')
	Add New Category
@endsection

@section('breadcrumb')
	<li>
        <a href="/admin/category">Categories</a>
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
                        <span class="caption-subject bold uppercase"> Add New Movie</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    {{ print_r($errors) }}
                    {{ Form::open(['route' => 'admin.category.store', 'method' => 'post']) }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-body">

                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) }}
                                    </div>

                                    {{--<div class="form-group">
                                        <label class="control-label">Title</label>
                                        {{ Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug']) }}
                                    </div>--}}

                                    <div class="form-group">
                                        <label class="control-label">Meta Description</label>
                                        {{ Form::textarea('meta_description', null, ['class' => 'form-control', 'rows' => 6]) }}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Meta Keywords</label>
                                        {{ Form::text('meta_keywords', null, ['class' => 'form-control']) }}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Meta Keywords</label>	
                                        {{ Form::select('category_status', ['' => 'Select Status', 1 => 'Active', 0 => 'Deactive'], null, ['class' => 'form-control']) }}
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