
<html lang="en-US"><!-- Mirrored from cartsy.redq.io/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Mar 2021 13:52:47 GMT --><!-- Added by HTTrack --><head><meta http-equiv="content-type" content="text/html;charset=UTF-8"><!-- /Added by HTTrack -->

<meta charset="UTF-8">
<title> {{config('app.name')}} | {{$title ?? ''}}</title>
<link media="all" href="{{asset('front/css/all.css')}}" rel="stylesheet">
<link rel="stylesheet" as="style" id="ionicons-min-css-css" href="{{asset('front/css/icon.css')}}" type="text/css" media="all">
<link rel="stylesheet" as="style" id="cartsy-body-font-css" href="https://fonts.googleapis.com/css2?family=Open+Sans%3Aital%2Cwght%400%2C300%3B0%2C400%3B0%2C600%3B0%2C700%3B0%2C800%3B1%2C300%3B1%2C400%3B1%2C600%3B1%2C700%3B1%2C800&amp;display=swap&amp;ver=5.6.2" type="text/css" media="all">
@stack('css') 
<style type="text/css">
  .downrotate{
    transform: rotate(
90deg
);
  }

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="https://cartsy.redq.io/wp-includes/js/jquery/jquery.min.js?ver=3.5.1"></script> -->
<!-- <script type='text/javascript' src='https://cartsy.redq.io/wp-content/themes/cartsy/assets/libs/swiper-bundle.min.js?ver=6.0.0-b-modified-1613034248' id='swiper-js'></script>
<script type='text/javascript' src='https://cartsy.redq.io/wp-content/plugins/wp-firebase-auth/assets/library/jquery-modal/jquery.modal.min.js?ver=-b-modified-1612453161' id='jquery-modal-js'></script> -->
</head>


<body class="home page-template page-template-page-alogila page-template-page-alogila-php page page-id-996 wp-custom-logo wp-embed-responsive theme-cartsy woocommerce-js cartsy-bottom-navigation-off cartsy-woocommerce windowHasScrollbar">
@include('front.layouts.header')

<div id="page" class="site">
    <div id="content" class="site-content">
<div class="cartsy-full-width-content">
          @yield('sidebar')
   
                                                                                                           
         
                @yield('content')
    <!-- <div style="display: none">
        <div class="cartsy-product-search-form position-header">
            <label>
                <span class="hidden-text">Search…</span>
                <span class="cartsy-product-search-form-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.048" height="18" viewBox="0 0 17.048 18">
                        <path data-name="Path 17130" d="M380.321,383.992l3.225,3.218c.167.167.341.329.5.506a.894.894,0,1,1-1.286,1.238c-1.087-1.067-2.179-2.131-3.227-3.236a.924.924,0,0,0-1.325-.222,7.509,7.509,0,1,1-3.3-14.207,7.532,7.532,0,0,1,6,11.936C380.736,383.462,380.552,383.685,380.321,383.992Zm-5.537.521a5.707,5.707,0,1,0-5.675-5.72A5.675,5.675,0,0,0,374.784,384.513Z" transform="translate(-367.297 -371.285)" fill="currentColor"></path>
                    </svg>
                </span>
                <input class="cartsy-product-search-form-input" placeholder="Search..." type="search" name="cartsy-search-banner-form-input">
            </label>
        </div>
    </div> -->
</div>
</div>


</div><!-- #content -->

</div><!-- #page -->



<!-- start footer -->
@include('front.layouts.footer')
<!-- end footer -->
@include('front.layouts.bottomnav')
<script>
jQuery(document).ready(function ($) {
	var timesClicked = 0;
	$('.cartsy-category-dropdown-title').click(function() {
		timesClicked++;
            if (timesClicked==2) {console.log(timesClicked);timesClicked=0;
                $(this).siblings('.cartsy-category-dropdown-content').css("display", "none");

            } else if(timesClicked==1) {console.log(timesClicked);
              $(this).siblings('.cartsy-category-dropdown-open ').addClass("downrotate");
                $(this).siblings('.cartsy-category-dropdown-content').css("display", "block");
                
            }
	 });
     $('.cartsy-mini-cart-dropdown-btn').click(function() {
         $(this).siblings('.cartsy-mini-cart').addClass("open");
      });
     $('.cartsy-mini-cart-close').click(function(){
        $('.cartsy-mini-cart').removeClass("open");
     });
     $('.cartsy-menu-toggler').click(function(){
        $(this).siblings('.cartsy-menu-drawer').addClass("open");
     });
     $('.cartsy-menu-drawer-close').click(function(){
        $('.cartsy-menu-drawer').removeClass("open");
     });


	});
</script>
<script type='text/javascript' src="{{asset('front/js/main.js')}}" id='cartsy_helper_main-js'></script>
@stack('scripts')
</body></html>