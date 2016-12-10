@extends('front.layouts.master')

@section('page-title')
	{{ $category->title }}
@endsection


@section('content')
	@foreach($messages as $message)
	    @include('front.layouts._partials.message_content', ['latestMessage' => $message])
	@endforeach
	{{ $messages->links() }}
@endsection