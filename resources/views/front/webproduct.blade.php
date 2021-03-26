@extends('front.layouts.base',['title'=>'Products'])
@section('sidebar')
@include('front.layouts.sidebar') 
@endsection
@section('content')

@push('css')

@endpush
<div class="cartsy-layout-main">
                        <div class="cartsy-show-sidebar-category-wrap">
                <div class="cartsy-show-sidebar-category ">
                    <div class="cartsy-show-sidebar-category-label">Categories<i class="ion ion-ios-arrow-down"></i>
                    </div>
                    <div class="cartsy-product-search-selected-category" style="display: none;">
                        <span class="parent-category">Fresh Vegetables</span>
                        <i class="ion ion-ios-arrow-forward"></i>
                        <span class="child-category">Carrot</span>
                    </div>
                </div>
            </div>
                    
                    <div class="cartsy-banner-search " style="background-color:#ffffff;background-image:url({{asset('front/sitedata/grocery-1-scaled.jpg')}});background-size:cover;background-attachment:scroll;background-repeat:no-repeat;background-position-x:center;background-position-y:center;">
                            <div class="cartsy-banner-search-content">
                <h2 class="cartsy-banner-search-title" style="color: #212121;">Products Delivered in 90 Minutes</h2>
                <div class="cartsy-banner-search-description" style="color: #5A5A5A;">Get your products delivered at your doorsteps all day everyday</div>
                                        <div class="cartsy-banner-search-form">
                        
                    <div class="cartsy-product-search-form position-banner">
                            <label>
                                <span class="hidden-text">E.g: Meat, Yogurt, Eggs…</span>
                                <span class="cartsy-product-search-form-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.048" height="18" viewBox="0 0 17.048 18">
                                        <path data-name="Path 17130" d="M380.321,383.992l3.225,3.218c.167.167.341.329.5.506a.894.894,0,1,1-1.286,1.238c-1.087-1.067-2.179-2.131-3.227-3.236a.924.924,0,0,0-1.325-.222,7.509,7.509,0,1,1-3.3-14.207,7.532,7.532,0,0,1,6,11.936C380.736,383.462,380.552,383.685,380.321,383.992Zm-5.537.521a5.707,5.707,0,1,0-5.675-5.72A5.675,5.675,0,0,0,374.784,384.513Z" transform="translate(-367.297 -371.285)" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <input class="cartsy-product-search-form-input" placeholder="E.g: Meat, Yogurt, Eggs..." type="search" name="cartsy-search-banner-form-input">
                            </label>
                        </div></div>
                                </div>
        </div>
        


<div class="cartsy-products-block cartsy-block-spacing-wrapper " id="cartsy-product-block" style="--desktop-padding-top:30px;--laptop-padding-top:30px;--tab-padding-top:30px;--mobile-padding-top:15px;--desktop-padding-right:0px;--laptop-padding-right:0px;--tab-padding-right:0px;--mobile-padding-right:0px;--desktop-padding-bottom:30px;--laptop-padding-bottom:30px;--tab-padding-bottom:30px;--mobile-padding-bottom:15px;--desktop-padding-left:0px;--laptop-padding-left:0px;--tab-padding-left:0px;--mobile-padding-left:0px;">

    
    <div class="cartsy-product-search-results grid-cols-xxl-6 grid-cols-xl-5 grid-cols-md-4 grid-cols-sm-3 grid-cols-2 gap-10">

        

@if(($subcategory && $subcategory->products)|| $favourites ?? []) 
@php
 
$subcategory=$subcategory?$subcategory->products:[$favourites[0]->products];
 
@endphp
@foreach($subcategory as $product)
@include('front.productlist')
@endforeach
@endif

        <div class="cartsy-product-search-loadmore col-span-xxl-6 col-span-xl-5 col-span-md-4 col-span-sm-3 col-span-2">
            <button class="button button-medium">
                <span class="loaded-text">Load More</span>
                <span class="loading-text">Loading...</span>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                    <path fill="#fff" d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z" transform="rotate(108.893 25 25)">
                        <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.8s" repeatCount="indefinite"></animateTransform>
                    </path>
                </svg>
            </button>
        </div>



</div>
</div>
<form method="POST" style="display:none" name="sub_category_form">
@csrf
<input type="hidden" name="subcategory" value=""/>
<input type="submit" value="submit"/>
</form>
    </div>

@push('scripts')
 <script>
 $(document).ready(function(){
//     $('input[type=radio]').on('change', function() {
//     $(this).closest("form").submit();
// });
$(".custom_form_radio").on('change',function(){
   $("[name='subcategory']").val($(this).val());
document.forms.sub_category_form.submit();
});
 });
 </script>
 @endpush

 @endsection