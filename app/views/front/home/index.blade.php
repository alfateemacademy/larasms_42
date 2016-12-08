@extends('front.layouts.master')

@section('content')
@foreach($latestMessages as $latestMessage)
    @include('front.layouts._partials.message_content')
@endforeach
{{ $latestMessages->links() }}
@endsection