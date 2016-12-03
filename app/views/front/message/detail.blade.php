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
                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-b b-blog-listing__pretitle">
                    By <a href="#" class="f-more">Stephen Brock</a> In <a href="#" class="f-more">Lifestyle</a>, <a href="#" class="f-more">Photography</a> Posted May 24th, 2013
                    <a href="#" class="f-more b-blog-listing__additional-text f-primary"><i class="fa fa-comment"></i>12 Comments</a>
                </div>
                <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text c-primary b-blog-listing__text">
                    {{ $message->message_content }}
                </div>
            </div>
        </div>
    </div>
@endsection