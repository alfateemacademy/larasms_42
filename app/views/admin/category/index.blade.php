@extends('admin.layouts.master')

@section('page-title')
	Categories
@endsection

@section('breadcrumb')
	<li>
		<span>Categories</span>
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
                        <span class="caption-subject bold uppercase"> Manage Categories</span>
                    </div>
                    <div class="actions">
                        <a href="/admin/category/create" class="btn blue btn-circle btn-outline sbold">
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
                            <th class="text-center">Status</th>
                            <th>Date</th>
                            <th class="text-center"></th>
                        </tr>
                        </thead>

                        <tbody>
                        	@foreach($categories as $category)
							<tr>
	                            <td>{{ $category->id }}</td>
	                            <td>{{ $category->title }}</td>
	                            <td class="text-center">{{ $category->category_status }}</td>
	                            <td>{{ $category->created_at }}</td>
	                            <td class="text-center">
	                            	<form action="/admin/category/{{ $category->id }}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="_method" value="DELETE">
                                        <a href="/admin/category/{{ $category->id }}/edit"
                                           class="btn btn-outline btn-circle btn-sm purple">
                                            <i class="fa fa-edit"></i> Edit </a>

                                        <button type="submit" class="btn btn-outline btn-circle dark btn-sm red">
                                            <i class="fa fa-trash-o"></i> Delete
                                        </button>
                                    </form>
	                            </td>
	                        </tr>
                        	@endforeach
                        </tbody>
                        
                    </table>
					
                    {{ $categories->links() }}

                </div>
            </div>
            <!-- END Portlet PORTLET-->
        </div>
    </div>
@endsection