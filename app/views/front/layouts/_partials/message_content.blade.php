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
            <a href="{{ route('message.detail', $latestMessage->slug) }}" class="f-infoblock-with-icon__info_title b-infoblock-with-icon__info_title f-primary-l b-title-b-hr f-title-b-hr">
                {{ $latestMessage->title }}
            </a>
            @include('front.layouts._partials.meta', ['message' => $latestMessage])
            <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text c-primary b-blog-listing__text">
                {{ $latestMessage->message_content }}
            </div>
            <div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text">
                <a href="{{ route('message.detail', $latestMessage->slug) }}" class="f-more f-primary-b">Read more</a>
            </div>
        </div>
    </div>
</div>