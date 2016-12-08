@extends('front.layouts.master')

@section('content')
    <div class="b-blog-listing__block">
        <div class="b-blog-listing__block-top">
            <div class=" view view-sixth">
                <img data-retina="" src="/assets/front/img/blog/blog_listing.jpg" alt="">
            </div>
        </div>
        <div class="b-infoblock-with-icon b-blog-listing__infoblock">
            <a href="#" class="b-infoblock-with-icon__icon f-infoblock-with-icon__icon fade-in-animate hidden-xs">
                <i class="fa fa-pencil"></i>
            </a>
            <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                <a href="{{ route('message.detail', $message->slug) }}" class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-l b-title-b-hr f-title-b-hr">
                    {{ $message->title }}
                </a>
                @include('front.layouts._partials.meta', ['message' => $message])    
                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text c-primary b-blog-listing__text">
                    {{ $message->message_content }}
                </div>
            </div>
        </div>
    </div>
    <!-- START AUTHOR BIO -->
                    <div class="b-blog-listing__block">
                    <br>
                        <div class="b-infoblock-with-icon b-blog-listing__infoblock">
                            <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                                <a href="#" class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-l b-title-b-hr f-title-b-hr">
                                    AUTHOR NAME
                                </a>
                                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text c-primary b-blog-listing__text">
                                    Pendisse blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis quam vel accumsan. Nunc a vulputate lectus. Vestibulum eleifend nisl sed massa sagittis vestibulum. Vestibulum pretium blandit tellus, sodales volutpat sapien varius vel. Phasellus tristique cursus erat, a placerat tellus laoreet eget. Blandit ligula turpis, ac convallis risus fermentum non. Duis vestibulum quis.
                                </div>
                                
                            </div>
                        </div>

                    </div>
                    <!-- END AUTHOR BIO -->

                    <!-- START COMMENT AREA -->
                    <div class="b-blog-listing__block">
                    <br>
                        <div class="b-infoblock-with-icon b-blog-listing__infoblock">
                            <div class="b-infoblock-with-icon__info f-infoblock-with-icon__info">
                                <a href="#" class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-l b-title-b-hr f-title-b-hr">
                                    {{ count($comments) }} Comment{{ (count($comments) > 1) ? 's' : null }}
                                </a>
                                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text c-primary b-blog-listing__text">
                               <div id="comments">
                                    @foreach($comments as $comment)
                                    {{--@if($comment->comment_status == 1)--}}
                                    <div class="media">
                                        <div class="media-body">
                                            <h4 class="media-heading">{{ $comment->name }}</h4>
                                        </div>
                                        {{{ nl2br($comment->comment_content) }}}
                                    </div>
                                    <hr>
                                    {{--@endif--}}
                                    @endforeach
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success')  }}
                                        </div>
                                    @endif
                                    {{ Form::open(['route' => ['comment.store', $message->id], 'method' => 'post']) }}
                                        @if(!Auth::check())
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" id="" placeholder="Fullname">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" id="" placeholder="Email">
                                        </div>
                                        @else
                                            You are logged in with <strong>{{ Auth::user()->name }}</strong> - <a href="/logout">Logout</a>
                                        @endif
                                        <div class="form-group">
                                          <textarea name="comment_content" rows="10" class="form-control" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    {{ Form::close() }}
                                </div>


                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- END COMMENT AREA -->
@endsection