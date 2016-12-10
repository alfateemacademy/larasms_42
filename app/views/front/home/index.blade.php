@extends('front.layouts.master')

@section('page-title')
	@if(Input::has('q'))
		Search: {{ Input::get('q') }}
	@else
		Home
	@endif
@endsection

@section('content')
	@foreach($latestMessages as $latestMessage)
	    @include('front.layouts._partials.message_content')
	@endforeach
	{{ $latestMessages->appends(['q' => Input::get('q')])->links() }}
@endsection