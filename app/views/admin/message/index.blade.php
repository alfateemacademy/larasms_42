@extends('admin.layouts.master')

@section('page-title')
	Messages
@endsection

@section('breadcrumb')
	<li><span>Messages</span></li>
@endsection

@section('content')
	<div class="row">
        <div class="col-md-12">
            <!-- BEGIN Portlet PORTLET-->
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-home"></i>
                        <span class="caption-subject bold uppercase"> Manage messages</span>
                    </div>
                    <div class="actions">
                        <a href="/admin/message/create" class="btn blue btn-circle btn-outline sbold">
                            <i class="fa fa-plus"></i> Add </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                    </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <table class="table table-striped table-condensed flip-content" id="tableResellers">
                        <thead class="flip-content">
                        <tr>
                            <th>ID</th>
                       		<th>Category</th>
                            <th>Title</th>
                            <th>View</th>
							<th class="text-center">Status</th>
                            <th>Date</th>
                            <th class="text-center"></th>
                        </tr>
                        </thead>

                        <tbody>
                        	@foreach($messages as $message)
							<tr>
	                            <td>{{ $message->id }}</td>
	                            <td>{{ $message->category->title }}</td>
	                            <td>{{ $message->title }}</td>
	                            <td>{{ $message->views }}</td>
	                           	<td class="text-center">{{ $message->message_status }}</td>
	                            <td>{{ $message->created_at }}</td>
	                            <td class="text-center">
                                    {{ Form::open(['route' => ['admin.message.destroy', $message->id], 'method' => 'DELETE']) }}
                                        <a href="/admin/message/{{ $message->id }}/edit"
                                           class="btn btn-outline btn-circle btn-sm purple">
                                            <i class="fa fa-edit"></i> Edit </a>

                                        <button type="submit" class="btn btn-outline btn-circle dark btn-sm red">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </button>
                                    {{ Form::close() }}
	                            </td>
	                        </tr>
                        	@endforeach
                        </tbody>
                        
                    </table>
					
                    {{ $messages->links() }}

                </div>
            </div>
            <!-- END Portlet PORTLET-->
        </div>
    </div>
@endsection