@extends('admin.layouts.master')

@section('page-title')
	Edit Message
@endsection

@section('breadcrumb')
	<li>
        <a href="/admin/message">Message</a>
        <i class="fa fa-angle-right"></i>
    </li>
    <li><span>Edit Message</span></li>
@endsection

@section('content')
	<div class="row">
	<div class="col-md-12">
            <!-- BEGIN Portlet PORTLET-->
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-home"></i>
                        <span class="caption-subject bold uppercase"> Edit Message</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    @include('admin.layouts._partials.errors')
                    {{ Form::model($message, ['route' => ['admin.message.update', $message->id], 'method' => 'put']) }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-body">

                                    <div class="form-group">
                                        <label class="control-label">Title</label>
                                        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title	']) }}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Message</label>
                                        {{ Form::textarea('message_content', null, ['class' => 'form-control', 'placeholder' => 'Message']) }}
                                    </div>

                                          <div class="form-group">
                                        <label class="control-label">Meta Description</label>
                                        {{ Form::textarea('meta_description', null, ['class' => 'form-control', 'placeholder' => 'Meta Description']) }}
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Meta Keywords</label>
                                        {{ Form::text('meta_keywords', null, ['class' => 'form-control', 'placeholder' => 'Meta Keywords']) }}
                                    </div>

									<div class="form-group">
                                        <label class="control-label">Status</label>	
                                        {{ Form::select('message_status', ['' => 'Select Status', 1 => 'Active', 0 => 'Deactive'], null, ['class' => 'form-control']) }}
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <a href="/admin/message" class="btn btn-danger">Cancel</a>
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