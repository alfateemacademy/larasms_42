<div class="f-infoblock-with-icon__info_text b-infoblock-with-icon__info_text f-primary-b b-blog-listing__pretitle">
    By <a href="{{ route('user.detail', $message->user->username) }}" class="f-more">{{ $message->user->name }}</a> In <a href="{{ route('category.detail', $message->category->slug) }}" class="f-more">{{ $message->category->title }}</a> Posted {{ date('F dS, Y', strtotime($message->created_at)) }}
    <a href="{{ route('message.detail', $message->slug) }}#comments" class="f-more b-blog-listing__additional-text f-primary"><i class="fa fa-comment"></i>{{ count($message->comments) }} Comments</a>
    <br>
    Views: {{ $message->views }}
</div>