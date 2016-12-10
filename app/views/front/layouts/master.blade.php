<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Blog: Listing Left Sidebar | Frexy Responsive HTML Template</title>
    <link rel="shortcut icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Bootstrap css -->
<link type="text/css" rel='stylesheet' href="/assets/front/css/bootstrap.min.css">
<!-- End Bootstrap css -->

<!-- Fancybox -->
<link type="text/css" rel='stylesheet' href="/assets/front/js/fancybox/jquery.fancybox.css">
<!-- End Fancybox -->

<link type="text/css" rel='stylesheet' href="fonts/fonts.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<link type="text/css" data-themecolor="default" rel='stylesheet' href="/assets/front/css/main-default.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

</head>
<body>
<div class="mask-l" style="background-color: #fff; width: 100%; height: 100%; position: fixed; top: 0; left:0; z-index: 9999999;"></div> <!--removed by integration-->
<header>
  <div class="container b-header__box b-relative">
	
    <div class="b-header-r b-right b-header-r--icon">
     
      <div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide"><i class="fa fa-align-justify"></i></div>
      <nav class="b-top-nav f-top-nav b-right j-top-nav">
          <ul class="b-top-nav__1level_wrap">
    <li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b"><a href="#"><i class="fa fa-home b-menu-1level-ico"></i>Home <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
        
    </li>
    
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
        <a href="#"><i class="fa fa-picture-o b-menu-1level-ico"></i>Portfolio <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
        
    </li>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
        <a href="#"><i class="fa fa-code b-menu-1level-ico"></i>Blog <span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
        
    </li>
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b b-top-nav-big">
        <a href="#"><i class="fa fa-cloud-download b-menu-1level-ico"></i>Pages<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
     
    </li>
   
    <li class="b-top-nav__1level f-top-nav__1level f-primary-b">
        <a href="#"><i class="fa fa-folder-open b-menu-1level-ico"></i>Contact us<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
    </li>
    
</ul>

      </nav>
    </div>
  </div>
</header>
<div class="j-menu-container"></div>

<div class="b-inner-page-header f-inner-page-header b-bg-header-inner-page">
  <div class="b-inner-page-header__content">
    <div class="container">
      <h1 class="f-primary-l c-default">@yield('page-title')</h1>
    </div>
  </div>
</div>
<div class="l-main-container">

    <div class="b-breadcrumbs f-breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li><i class="fa fa-angle-right"></i><a href="#">Blog</a></li>
                <li><i class="fa fa-angle-right"></i><span>Listing Left Sidebar</span></li>
            </ul>
        </div>
    </div>

    <div class="l-inner-page-container">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    @yield('content')
                </div>
                <div class="visible-xs-block visible-sm-block b-hr"></div>
                <div class="col-md-3 col-md-pull-9">
                    <div class="row">
    <div class="col-md-12">
        <div class="b-form-row b-input-search">
            {{ Form::open(['url' => '/', 'method' => 'GET']) }}
            <input class="form-control" value="{{ Input::get('q') }}" type="text" name="q" placeholder="Enter your keywords"/>
            <button type="submit" class="b-btn b-btn-search f-btn-search fa fa-search fa-2x"></button>
            {{ Form::close() }}
        </div>
    </div>
</div>
<div class="row b-col-default-indent">
    <div class="col-md-12">
        <div class="b-categories-filter">
            <h4 class="f-primary-b b-h4-special f-h4-special--gray f-h4-special">blog categories</h4>
            <ul>
              @foreach($categories as $category)
                  @if(count($category->messages) > 0)
                  <li>
                      <a class="f-categories-filter_name" href="{{ route('category.detail', $category->slug) }}"><i class="fa fa-plus"></i> {{ str_limit($category->title, 25) }}</a>
                      <span class="b-categories-filter_count f-categories-filter_count">{{ count($category->messages) }}</span>
                  </li>
                  @endif
              @endforeach
          </ul>
        </div>
    </div>
    <div class="col-md-12">
        <h4 class="f-primary-b b-h4-special  f-h4-special--gray f-h4-special">popular sms</h4>

        <div class="b-blog-short-post b-blog-short-post--img-hover-bordered b-blog-short-post--w-img f-blog-short-post--w-img row">
            <div class="b-blog-short-post b-blog-short-post--img-hover-bordered b-blog-short-post--w-img f-blog-short-post--w-img row">

    @foreach($popularMessages as $popularMessage)
    <div class="b-blog-short-post--popular col-md-12  col-xs-12 f-primary-b">
        <div class="b-remaining">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
                <a href="{{ route('message.detail', $popularMessage->slug) }}">{{ $popularMessage->title }}</a>
                <div class="short-content">
                    {{ str_limit($popularMessage->message_content, 100) }}
                </div>
            </div>
            <div class="b-blog-short-post__item_date f-blog-short-post__item_date f-primary-it">
                {{ date('d F, Y', strtotime($popularMessage->created_at)) }}
            </div>
        </div>
    </div>
    @endforeach
</div>
        </div>
    </div>
    <div class="col-md-12">
        <h4 class="f-primary-b b-h4-special f-h4-special--gray f-h4-special">tags cloud</h4>
        <div>
    <a class="f-tag b-tag" href="#">Dress</a>
    <a class="f-tag b-tag" href="#">Mini</a>
    <a class="f-tag b-tag" href="#">Skate animal</a>
    <a class="f-tag b-tag" href="#">Lorem ipsum</a>
    <a class="f-tag b-tag" href="#">literature</a>
    <a class="f-tag b-tag" href="#">Baroque</a>
    <a class="f-tag b-tag" href="#">Dress</a>
    <a class="f-tag b-tag" href="#">Mini</a>
    <a class="f-tag b-tag" href="#">Skate animal</a>
    <a class="f-tag b-tag" href="#">Lorem ipsum</a>
    <a class="f-tag b-tag" href="#">literature</a>
    <a class="f-tag b-tag" href="#">Baroque</a>
</div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>



</div>

<footer>
  <div class="b-footer-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12 f-copyright b-copyright">Copyright © 2014 - All Rights Reserved</div>
            <div class="col-sm-8 col-xs-12">
                <div class="b-btn f-btn b-btn-default b-right b-footer__btn_up f-footer__btn_up j-footer__btn_up">
                    <i class="fa fa-chevron-up"></i>
                </div>
                <nav class="b-bottom-nav f-bottom-nav b-right hidden-xs">
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li class="is-active-bottom-nav"><a href="#">Headers</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><a href="#">Shortcode</a></li>
                        <li><a href="#">Shop</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
  <div class="container">
    <div class="b-footer-secondary row">
      <div class="col-md-3 col-sm-12 col-xs-12 f-center b-footer-logo-containter">
         
          <div class="b-footer-logo-text f-footer-logo-text">
          <p>Mauris rhoncus pretium porttitor. Cras scelerisque commodo odio.</p>
          <div class="b-btn-group-hor f-btn-group-hor">
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-dribbble"></i>
            </a>
            <a href="#" class="b-btn-group-hor__item f-btn-group-hor__item">
              <i class="fa fa-behance"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <h4 class="f-primary-b">Latest blog posts</h4>
        <div class="b-blog-short-post row">
          <div class="b-blog-short-post__item col-md-12 col-sm-4 col-xs-12 f-primary-b">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
              <a href="#">Amazing post with all the goodies</a>
            </div>
            <div class="b-blog-short-post__item_date f-blog-short-post__item_date">
              March 23, 2013
            </div>
          </div>
          <div class="b-blog-short-post__item col-md-12 col-sm-4 col-xs-12 f-primary-b">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
              <a href="#">Amazing post with all the goodies</a>
            </div>
            <div class="b-blog-short-post__item_date f-blog-short-post__item_date">
              March 23, 2013
            </div>
          </div>
          <div class="b-blog-short-post__item col-md-12 col-sm-4 col-xs-12 f-primary-b">
            <div class="b-blog-short-post__item_text f-blog-short-post__item_text">
              <a href="#">Amazing post with all the goodies</a>
            </div>
            <div class="b-blog-short-post__item_date f-blog-short-post__item_date">
              March 23, 2013
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12">
        <h4 class="f-primary-b">contact info</h4>
        <div class="b-contacts-short-item-group">
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon f-contacts-short-item__icon_lg b-left">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text">
              Frexy Studio<br/>
                1234 Street Name, City Name,<br/>
                United States.<br/>
            </div>
          </div>
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_md">
              <i class="fa fa-skype"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_phone">
                Skype: ask.company
            </div>
          </div>
          <div class="b-contacts-short-item col-md-12 col-sm-4 col-xs-12">
            <div class="b-contacts-short-item__icon f-contacts-short-item__icon b-left f-contacts-short-item__icon_xs">
              <i class="fa fa-envelope"></i>
            </div>
            <div class="b-remaining f-contacts-short-item__text f-contacts-short-item__text_email">
              <a href="mailto:frexystudio@gmail.com">mail@example.com</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 col-xs-12 ">
        <h4 class="f-primary-b">photo stream</h4>
          <div class="b-short-photo-items-group">
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="/assets/front/img/gallery/sm/gallery_1.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="/assets/front/img/gallery/sm/gallery_1.jpg" alt=""/></a>
    </div>
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="/assets/front/img/gallery/sm/gallery_2.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="/assets/front/img/gallery/sm/gallery_2.jpg" alt=""/></a>
    </div>
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="/assets/front/img/gallery/sm/gallery_3.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="/assets/front/img/gallery/sm/gallery_3.jpg" alt=""/></a>
    </div>
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="/assets/front/img/gallery/sm/gallery_4.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="/assets/front/img/gallery/sm/gallery_4.jpg" alt=""/></a>
    </div>
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="/assets/front/img/gallery/sm/gallery_5.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="/assets/front/img/gallery/sm/gallery_5.jpg" alt=""/></a>
    </div>
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="/assets/front/img/gallery/sm/gallery_6.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="/assets/front/img/gallery/sm/gallery_6.jpg" alt=""/></a>
    </div>
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="/assets/front/img/gallery/sm/gallery_7.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="/assets/front/img/gallery/sm/gallery_7.jpg" alt=""/></a>
    </div>
    <div class="b-column">
        <a class="b-short-photo-item fancybox" href="/assets/front/img/gallery/sm/gallery_8.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="/assets/front/img/gallery/sm/gallery_8.jpg" alt=""/></a>
    </div>
    <div class="b-column hidden-xs">
        <a class="b-short-photo-item fancybox" href="/assets/front/img/gallery/sm/gallery_9.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="/assets/front/img/gallery/sm/gallery_9.jpg" alt=""/></a>
    </div>
    <div class="b-column hidden-sm hidden-xs">
        <a class="b-short-photo-item fancybox" href="/assets/front/img/gallery/sm/gallery_10.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="/assets/front/img/gallery/sm/gallery_10.jpg" alt=""/></a>
    </div>
    <div class="b-column hidden-sm hidden-xs">
        <a class="b-short-photo-item fancybox" href="/assets/front/img/gallery/sm/gallery_11.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="/assets/front/img/gallery/sm/gallery_11.jpg" alt=""/></a>
    </div>
    <div class="b-column hidden-sm hidden-xs">
        <a class="b-short-photo-item fancybox" href="/assets/front/img/gallery/sm/gallery_12.jpg" title="photo stream" rel="footer-group"><img width="62" height="62" data-retina src="/assets/front/img/gallery/sm/gallery_12.jpg" alt=""/></a>
    </div>
</div>
      </div>
    </div>
  </div>
</footer>

<script src="/assets/front/js/jquery/jquery-1.11.1.min.js"></script>
<!-- bootstrap -->
<script src="/assets/front/js/bootstrap.min.js"></script>
<!-- end bootstrap -->


<!-- Modules -->
<script src="/assets/front/js/modules/color-themes.js"></script>
<!-- End Modules -->
<!-- Google services -->
<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>

<!-- end Google services -->
<!-- Fancybox -->
<script src="/assets/front/js/fancybox/jquery.fancybox.pack.js"></script>
<script src="/assets/front/js/fancybox/jquery.mousewheel.pack.js"></script>
<script src="/assets/front/js/fancybox/jquery.fancybox.custom.js"></script>
<!-- End Fancybox -->

<script src="/assets/front/js/cookie.js"></script>




</body>


</html>