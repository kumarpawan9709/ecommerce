jQuery(document).ready(function ($) {
    init();
    function init() {
      if (typeof CartsySearch != 'undefined') {
        let initParams = {};
  
        // Url search
        if (window.location.href.split('?')[1]) {
          let params = getParameters(document.location.search);
          let searchQuery = params[0] ? params[0].value : '';
  
          if (params[0].name === 'text') {
            $('.cartsy-product-search-form-input').val(searchQuery);
            initParams = {
              type: 'text',
              value: searchQuery,
            };
          }
        }
        CartsySearch.initSearch(initParams);
        // End
  
        handleCategory();
        handleTextSearch();
      }
  
      if (typeof CartsyGlobalSearch != 'undefined') {
        handleTextSearch();
      }
  
      // Initializing Scroll to content for terms and condition and privacy policy page
      if ($('.cartsy-scroll-to-content').length) {
        ScrollToContent();
      }
      // Init Contact info map
      if ($('.cartsyContactMap').length) {
        ContactInfoMap();
      }
      cartsySlider();
      bannerSlider();
      accordion();
    }
  
    /**
     *
     *  SEARCH WIDGET BASIC EVENT HANDING
     *
     *
     */
    function handleTextSearch() {
      $('.cartsy-product-search-form-input').on('search', function () {
        const value = $(this).val();
        if (value == '') {
          clearParameters();
  
          CartsySearch.search({
            type: 'text',
            value: '',
          });
        }
      });
  
      $('.cartsy-product-search-form-input').on(
        'keyup',
        _.debounce(function () {
          clearParameters();
          CartsySearch.search({
            type: 'text',
            value: $(this).val(),
          });
  
          var adminBarHeight = $('#wpadminbar').length
            ? $('#wpadminbar').outerHeight()
            : 0;
          var menuAreaHeight = $('.cartsy-menu-area').length
            ? $('.cartsy-menu-area').outerHeight()
            : 0;
          var storeNoticeHeight = $('.woocommerce-store-notice').is(':visible')
            ? $('.woocommerce-store-notice').outerHeight()
            : 0;
  
          $('.cartsy-bottom-navigation-search').removeClass('show-search');
  
          $('html, body').animate(
            {
              scrollTop:
                $('#cartsy-product-block').offset().top -
                (adminBarHeight + menuAreaHeight + storeNoticeHeight),
            },
            1000
          );
        }, 500)
      );
  
      // Handle global search
      if ($('.native-search-clear').length) {
        $('.native-search-clear').on('click', function () {
          $('.cartsy-global-search-input').val('');
          $('.cartsy-global-search-results').hide();
          $('.cartsy-global-search-container').removeClass('result-found');
          return;
        });
      }
  
      $('.cartsy-global-search-input').on(
        'keyup',
        _.debounce(function () {
          let searchQuery = $(this).val();
          if (searchQuery === '') {
            $('.cartsy-global-search-results').hide();
            return;
          }
  
          $('.cartsy-global-search-results').show();
  
          CartsyGlobalSearch.search({
            type: 'text',
            value: searchQuery,
          });
  
          let a = document.getElementById('cartsy_more_result_link');
          let siteSlug = CARTSY_HELPER_DATA.siteSlug;
  
          if (siteSlug) {
            a.href = `/${siteSlug}?text=${searchQuery}`;
          } else {
            a.href = `/?text=${searchQuery}`;
          }
        }, 500)
      );
      // End;
    }
  
    function handleCategory() {
      $('.cartsy-category-dropdown-title label').on('click', function () {
        $(this)
          .parent()
          .parent()
          .siblings()
          .find('.cartsy-category-dropdown-title.active')
          .siblings('.cartsy-category-dropdown-content')
          .slideToggle();
        $(this)
          .parent()
          .parent()
          .siblings()
          .find('.cartsy-category-dropdown-title')
          .removeClass('active');
        $(this).parent().toggleClass('active');
        $(this)
          .parent()
          .siblings('.cartsy-category-dropdown-content')
          .slideToggle();
      });
      $("input[name='product-category']").on('change', function () {
        var value = $('body')
          .find("input[name='product-category']:checked")
          .val();
        var adminBarOffset = $('#wpadminbar').length
          ? $('#wpadminbar').outerHeight()
          : 0;
        var offset = 100 + adminBarOffset;
  
        // Fire Search
        CartsySearch.search({
          type: 'category',
          value: value,
        });
  
        if (this.checked) {
          $('body')
            .find(
              '.cartsy-product-dropdown-category, .cartsy-category-dropdown-title label, .cartsy-category-card, .cartsy-category-list, .cartsy-category-boxed-plus'
            )
            .removeClass('selected');
          $(this).parent().addClass('selected');
        }
        $('.cartsy-layout-sidebar').removeClass('show-sidebar');
        $('body').css({
          overflow: '',
          touchAction: '',
          width: '',
        });
        $('html, body')
          .stop()
          .animate(
            {
              scrollTop: $('#cartsy-product-block').offset().top - offset,
            },
            700
          );
      });
  
      $("input[name='product-category']").on('click', function () {
        var previousValue = $(this).attr('previousValue');
  
        if (previousValue == 'checked') {
          $(this).removeAttr('checked');
          $(this).parent().removeClass('selected');
          $(this).attr('previousValue', false);
          // Fire Search
          CartsySearch.search({
            type: 'category',
            value: '',
          });
        } else {
          $("input[name='product-category']:radio").attr('previousValue', false);
          $(this).attr('previousValue', 'checked');
        }
      });
  
      $('.cartsy-category-clear').on('click', function () {
        $('body')
          .find(
            '.cartsy-product-dropdown-category, .cartsy-category-dropdown-title label, .cartsy-category-card,  .cartsy-category-list, .cartsy-category-boxed-plus'
          )
          .removeClass('selected');
        $("input[name='product-category']").removeAttr('checked');
        $("input[name='product-category']").attr('previousValue', false);
        CartsySearch.search({
          type: 'category',
          value: '',
        });
      });
    }
  
    function getParameters(url) {
      var splitParametersFromUrl = url.split('?');
      var splitParameters = splitParametersFromUrl[1].split('&');
      var param = function (name, value) {
        (this.name = name), (this.value = value);
      };
      var result = new Array();
      for (var i = 0; i < splitParameters.length; i++) {
        var item = splitParameters[i].split('=');
        var itemParam = new param(
          decodeURIComponent(item[0]),
          decodeURIComponent(item[1]).split('+').join(' ')
        );
        result.push(itemParam);
      }
      return result;
    }
  
    function clearParameters() {
      const currentPageUrl = window.location.href.split('?')[0];
      window.history.replaceState(null, null, currentPageUrl);
    }
  
    /**
     *
     * Cartsy Event Handling
     */
    //Window onScroll functions
    $(window).on('scroll', function () {
      //Initializing scrollspy
      if ($('.cartsy-scroll-to-content').length) ScrollSpy();
    });
  
    //Accordion
    function accordion() {
      var accordionTitle = $('.cartsy-faq-accordion-title');
      var accordionDescription = $('.cartsy-faq-accordion-description');
  
      accordionDescription.slideUp();
  
      accordionTitle.on('click', function () {
        $(this).siblings().removeClass('active');
        $(this)
          .siblings()
          .children('span')
          .removeClass('ion-ios-remove')
          .addClass('ion-ios-add');
        $(this).toggleClass('active');
        $(this)
          .next(accordionDescription)
          .slideToggle()
          .toggleClass('active-description')
          .siblings('div:visible')
          .slideUp()
          .removeClass('active-description');
        $(this).children('span').toggleClass('ion-ios-add ion-ios-remove');
      });
    }
  
    //Scroll to content
    function ScrollToContent() {
      var menuareaHeight = $(' .cartsy-menu-area').outerHeight();
      var adminBarHeight = $('#wpadminbar').outerHeight();
      let offset = 0;
      $(window).width() < 600
        ? (offset = menuareaHeight + 30)
        : (offset = adminBarHeight + menuareaHeight + 30);
  
      $('.cartsy-scroll-to-content-list li>a').on('click', function (event) {
        event.preventDefault();
        var $anchor = $(this);
        $('html, body')
          .stop()
          .animate(
            {
              scrollTop: $($anchor.attr('href')).offset().top - offset,
            },
            700,
            'easeOutCubic'
          );
        setTimeout(function () {
          $anchor.parent().siblings().removeClass('active');
          $anchor.parent().addClass('active');
        }, 700);
      });
    }
  
    //ScrollSpy
    function ScrollSpy() {
      var menuareaHeight = $(' .cartsy-menu-area').outerHeight();
      var adminBarHeight = $('#wpadminbar').outerHeight();
      let offset = 0;
      $(window).width() < 600
        ? (offset = menuareaHeight + 35)
        : (offset = adminBarHeight + menuareaHeight + 35);
      var scrollPosition = $(window).scrollTop();
      var elems = $('.cartsy-scroll-to-content-content-item');
      elems.each(function (index) {
        var elemTop = $(this).offset().top - offset;
        var elemBottom = elemTop + $(this).height();
        if (scrollPosition >= elemTop && scrollPosition <= elemBottom) {
          var id = $(this).attr('id');
          var navElem = $('a[href="#' + id + '"]');
          navElem.parent().addClass('active').siblings().removeClass('active');
        }
      });
    }
  
    function ContactInfoMap() {
      const lat = $('.cartsyContactMap').data('lattitude');
      const lng = $('.cartsyContactMap').data('longitude');
      const mapOption = {
        zoom: 15,
        // disableDefaultUI: true,
        center: {
          lat: lat,
          lng: lng,
        },
        zoomControl: true,
        styles: MapStyle,
        markerOptions: {
          draggable: true,
        },
      };
      const map = new google.maps.Map(
        document.getElementById('cartsyContactMap'),
        mapOption
      );
      const marker = new google.maps.Marker({
        position: mapOption.center,
        map: map,
      });
    }
  
    //Cartsy Slider Block
    function cartsySlider() {
      const slidesPerViewDesktop = $('.cartsySliderSettings').data(
        'slides-per-view-desktop'
      );
      const slidesPerViewLaptop = $('.cartsySliderSettings').data(
        'slides-per-view-laptop'
      );
      const slidesPerViewTab = $('.cartsySliderSettings').data(
        'slides-per-view-tab'
      );
      const slidesPerViewMobile = $('.cartsySliderSettings').data(
        'slides-per-view-mobile'
      );
      const spaceBetweenDesktop = $('.cartsySliderSettings').data(
        'space-between-desktop'
      );
      const spaceBetweenLaptop = $('.cartsySliderSettings').data(
        'space-between-laptop'
      );
      const spaceBetweenTab = $('.cartsySliderSettings').data(
        'space-between-tab'
      );
      const spaceBetweenMobile = $('.cartsySliderSettings').data(
        'space-between-mobile'
      );
      const autoPlay = $('.cartsySliderSettings').data('autoplay');
      const loop = $('.cartsySliderSettings').data('loop');
      const speed = $('.cartsySliderSettings').data('speed');
      const centeredSlides = $('.cartsySliderSettings').data('centered-slides');
      const grabCursor = $('.cartsySliderSettings').data('grab-cursor');
      const autoHeight = $('.cartsySliderSettings').data('auto-height');
      const navigation = $('.cartsySliderSettings').data('navigation');
  
      new Swiper('.cartsy-slider-selector', {
        slidesPerView: slidesPerViewMobile,
        spaceBetween: spaceBetweenMobile,
        autoplay: autoPlay,
        loop: loop,
        speed: speed,
        centeredSlides: centeredSlides,
        grabCursor: grabCursor,
        autoHeight: autoHeight,
        navigation: {
          nextEl: navigation ? '.cartsy-slider-next-button' : '',
          prevEl: navigation ? '.cartsy-slider-prev-button' : '',
        },
        breakpoints: {
          767: {
            slidesPerView: slidesPerViewTab,
            spaceBetween: spaceBetweenTab,
          },
          1200: {
            slidesPerView: slidesPerViewLaptop,
            spaceBetween: spaceBetweenLaptop,
          },
          1400: {
            slidesPerView: slidesPerViewDesktop,
            spaceBetween: spaceBetweenDesktop,
          },
        },
      });
    }
  
    //Banner Slider
    function bannerSlider() {
      new Swiper('.cartsy-banner-search-slider .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        speed: 700,
        navigation: false,
        pagination: {
          el: '.cartsy-banner-search-slider .swiper-pagination',
          type: 'bullets',
          clickable: true,
        },
        autoplay: { delay: 6000, disableOnInteraction: false },
      });
    }
  });