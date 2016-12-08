<div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-b b-blog-listing__pretitle">
    By <a href="#" class="f-more">{{ $message->user->name }}</a> In <a href="#" class="f-more">{{ $message->category->title }}</a> Posted {{ date('F dS, Y', strtotime($message->created_at)) }}
    <a href="#" class="f-more b-blog-listing__additional-text f-primary"><i class="fa fa-comment"></i>{{ count($message->comments) }} Comments</a>
</div>