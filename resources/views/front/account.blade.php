@extends('front.layouts.base',['sidebar_in'=>true])
@section('title','Products')

@section('content')
@push('css')

@endpush




<div id="primary" class="content-area  no-sidebar ">
  <main id="main" class="site-main">
    
<article id="post-15" class="post-15 page type-page status-publish hentry">
        <!-- .entry-header -->
    <div class="entry-content">
        <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>

  <div class="u-columns col2-set" id="customer_login">

    <div class="u-column1 col-1">

    
    <h2>Login</h2>

    <form class="woocommerce-form woocommerce-form-login login" method="post">

      
      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="username">Username or email address&nbsp;<span class="required">*</span></label>
        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="">      </p>
      <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="password">Password&nbsp;<span class="required">*</span></label>
        <span class="password-input"><input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password"><span class="show-password-input"></span></span>
      </p>

      
      <p class="form-row">
        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
          <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
        </label>
        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="b1db712c1a"><input type="hidden" name="_wp_http_referer" value="/my-account/">        <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
      </p>
      <p class="woocommerce-LostPassword lost_password">
        <a href="https://cartsy.redq.io/my-account/lost-password/">Lost your password?</a>
      </p>

      <div class="cartsy-custom-auth-wrapper">
                  <div class="cartsy-auth-separator">Or</div>
        
        <!-- Start Phone Login -->
                  <div class="cartsy-phone-login-wrapper">
              <button type="button" class="rq-otp-btn rq-otp-phone-button-toggle" id="rq-otp-phone-button-toggle-6050b61c04775">
    <span class="rq-otp-btn-icon">
      <svg x="0px" y="0px" viewBox="0 0 503.604 503.604">
        <g>
          <g>
            <path d="M337.324,0H167.192c-28.924,0-53.5,23.584-53.5,52.5v398.664c0,28.916,24.056,52.44,52.98,52.44l170.412-0.184
			c28.92,0,52.58-23.528,52.58-52.448l0.248-398.5C389.908,23.452,366.364,0,337.324,0z M227.68,31.476h49.36
			c4.336,0,7.868,3.52,7.868,7.868c0,4.348-3.532,7.868-7.868,7.868h-49.36c-4.348,0-7.868-3.52-7.868-7.868
			C219.812,34.996,223.332,31.476,227.68,31.476z M198.02,33.98c2.916-2.912,8.224-2.952,11.136,0c1.46,1.456,2.324,3.5,2.324,5.588
			c0,2.048-0.864,4.088-2.324,5.548c-1.452,1.46-3.504,2.32-5.548,2.32c-2.084,0-4.088-0.86-5.588-2.32
			c-1.452-1.456-2.28-3.5-2.28-5.548C195.736,37.48,196.568,35.436,198.02,33.98z M250.772,488.008
			c-12.984,0-23.544-10.568-23.544-23.548c0-12.984,10.56-23.548,23.544-23.548s23.544,10.564,23.544,23.548
			C274.316,477.44,263.752,488.008,250.772,488.008z M365.488,424.908H141.232V74.756h224.256V424.908z"></path>
          </g>
        </g>
      </svg>

    </span>
    <span class="rq-otp-btn-text">
      Continue with Phone    </span>
  </button>

  <div class="rq-otp-modal modal" id="rq-otp-modal-6050b61c04775">
    <a href="#close-modal" rel="modal:close" class="rq-otp-close-modal">
      <svg height="329pt" viewBox="0 0 329.26933 329" width="329pt">
        <path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"></path>
      </svg>
    </a>
    <!-- end of modal close btn -->

    <div id="rq-otp-phone-wrapper-6050b61c04775" class="rq-otp-phone-wrapper rq-hide">
      <h3 class="rq-otp-modal-title">
        Enter Your Number      </h3>
      <div data-recaptcha="invisible" class="rq-otp-recaptcha-section" id="rq-otp-recaptcha-section-6050b61c04775">
       
        <div id="rq-otp-error-6050b61c04775" class="rq-otp-error-feedback rq-otp-error">
        </div>
        <div class="rq-otp-recaptcha-container" id="rq-otp-recaptcha-container-6050b61c04775"></div>
        <button type="button" class="number-submit rq-otp-btn firebase-otp-phone-button" id="firebase-otp-phone-button-6050b61c04775">
          <span class="rq-otp-btn-text">
            Send Code          </span>
          <span class="rq-otp-mini-loader">
            <span class="dot1"></span>
            <span class="dot2"></span>
            <span class="dot3"></span>
          </span>
        </button>
      </div>
    </div>
    <!-- end of otp phone number input area -->

    <div id="rq-otp-code-6050b61c04775" class="rq-otp-code-wrapper rq-hide">
      <h3 class="rq-otp-modal-title">
        Verify Code      </h3>

      <div class="rq-otp-phone-code-input" id="rq-otp-phone-code-input-6050b61c04775">
        <div class="rq-otp-form-group">
          <input type="text" name="letters[]" class="letter" pattern="[0-9]*" inputmode="numeric" maxlength="1" placeholder="○">
          <input type="text" name="letters[]" class="letter" pattern="[0-9]*" inputmode="numeric" maxlength="1" placeholder="○">
          <input type="text" name="letters[]" class="letter" pattern="[0-9]*" inputmode="numeric" maxlength="1" placeholder="○">
          <input type="text" name="letters[]" class="letter" pattern="[0-9]*" inputmode="numeric" maxlength="1" placeholder="○">
          <input type="text" name="letters[]" class="letter" pattern="[0-9]*" inputmode="numeric" maxlength="1" placeholder="○">
          <input type="text" name="letters[]" class="letter" pattern="[0-9]*" inputmode="numeric" maxlength="1" placeholder="○">
        </div>
      </div>
      <!-- id rq-otp-verify-section used in js for code letter input  -->
      <div class="rq-otp-verify-section" id="rq-otp-verify-section-6050b61c04775">
        <input type="hidden" name="rq-otp-verify-phone" class="rq-otp-firebase-verify-phone" id="rq-otp-firebase-verify-phone-6050b61c04775">
        <button type="button" class="code-submit rq-otp-btn rq-otp-verify-button" id="rq-otp-verify-button-6050b61c04775">
          <span class="rq-otp-btn-text">
            Verify &amp; Login          </span>
          <span class="rq-otp-mini-loader">
            <span class="dot1"></span>
            <span class="dot2"></span>
            <span class="dot3"></span>
          </span>
        </button>
      </div>
    </div>
    <!-- end of otp code & verify area -->

    <!-- error feedback section -->
    <div id="rq-otp-modal-error-6050b61c04775" class="rq-otp-modal-error rq-otp-error-feedback"></div>

    <!-- success feedback section -->
    <div id="rq-otp-modal-success-6050b61c04775" class="rq-otp-modal-success rq-otp-success-feedback">
      <div class="rq-success-check-icon">
        <span class="icon-line line-tip"></span>
        <span class="icon-line line-long"></span>
        <div class="icon-circle"></div>
        <div class="icon-fix"></div>
      </div>
      <h3>
        Successful!      </h3>
    </div>
    <!-- end of rq otp modal -->
  </div>
          </div>
                <!-- End Phone Login -->

        <!-- Start Social Login -->
        <div class="nsl-container nsl-container-block" data-align="left"><div class="nsl-container-buttons"><a href="https://cartsy.redq.io/wp-login.php?loginSocial=facebook&amp;redirect=https%3A%2F%2Fcartsy.redq.io%2Fmy-account%2F" rel="nofollow" aria-label="Continue with <b>Facebook</b>" data-plugin="nsl" data-action="connect" data-provider="facebook" data-popupwidth="475" data-popupheight="175"><div class="nsl-button nsl-button-default nsl-button-facebook" data-skin="dark" style="background-color:#1877F2;"><div class="nsl-button-svg-container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1365.3 1365.3" height="1365.3" width="1365.3"><path d="M1365.3 682.7A682.7 682.7 0 10576 1357V880H402.7V682.7H576V532.3c0-171.1 102-265.6 257.9-265.6 74.6 0 152.8 13.3 152.8 13.3v168h-86.1c-84.8 0-111.3 52.6-111.3 106.6v128h189.4L948.4 880h-159v477a682.8 682.8 0 00576-674.3" fill="#fff"></path></svg></div><div class="nsl-button-label-container">Continue with <b>Facebook</b></div></div></a><a href="https://cartsy.redq.io/wp-login.php?loginSocial=google&amp;redirect=https%3A%2F%2Fcartsy.redq.io%2Fmy-account%2F" rel="nofollow" aria-label="Continue with <b>Google</b>" data-plugin="nsl" data-action="connect" data-provider="google" data-popupwidth="600" data-popupheight="600"><div class="nsl-button nsl-button-default nsl-button-google" data-skin="light" style="background-color:#fff;"><div class="nsl-button-svg-container"><svg xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path fill="#4285F4" fill-rule="nonzero" d="M20.64 12.2045c0-.6381-.0573-1.2518-.1636-1.8409H12v3.4814h4.8436c-.2086 1.125-.8427 2.0782-1.7959 2.7164v2.2581h2.9087c1.7018-1.5668 2.6836-3.874 2.6836-6.615z"></path><path fill="#34A853" fill-rule="nonzero" d="M12 21c2.43 0 4.4673-.806 5.9564-2.1805l-2.9087-2.2581c-.8059.54-1.8368.859-3.0477.859-2.344 0-4.3282-1.5831-5.036-3.7104H3.9574v2.3318C5.4382 18.9832 8.4818 21 12 21z"></path><path fill="#FBBC05" fill-rule="nonzero" d="M6.964 13.71c-.18-.54-.2822-1.1168-.2822-1.71s.1023-1.17.2823-1.71V7.9582H3.9573A8.9965 8.9965 0 0 0 3 12c0 1.4523.3477 2.8268.9573 4.0418L6.964 13.71z"></path><path fill="#EA4335" fill-rule="nonzero" d="M12 6.5795c1.3214 0 2.5077.4541 3.4405 1.346l2.5813-2.5814C16.4632 3.8918 14.426 3 12 3 8.4818 3 5.4382 5.0168 3.9573 7.9582L6.964 10.29C7.6718 8.1627 9.6559 6.5795 12 6.5795z"></path><path d="M3 3h18v18H3z"></path></g></svg></div><div class="nsl-button-label-container">Continue with <b>Google</b></div></div></a></div></div>        <!-- End Social Login -->
      </div>

      
    </form>

    
    </div>

    <div class="u-column2 col-2">

      <h2>Register</h2>

      <form method="post" actioin="{{route('register')}}" class="woocommerce-form woocommerce-form-register register">
        @csrf
        
        
        <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
          <label for="reg_email">Email address&nbsp;<span class="required">*</span></label>
          <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="">        </p>

        
          <p>A password will be sent to your email address.</p>

        
        <div class="woocommerce-privacy-policy-text"><p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
</div>
         
        <div class="cartsy-custom-auth-wrapper">
                      <div class="cartsy-auth-separator">Or</div>
          
          <!-- Start Phone Login -->
                      <div class="cartsy-phone-login-wrapper">
                <button type="button" class="rq-otp-btn rq-otp-phone-button-toggle" id="rq-otp-phone-button-toggle-6050b61c04f0f">
  
    <span class="rq-otp-btn-text">
      Continue with Phone    </span>
  </button>

   
    <!-- end of modal close btn -->

    <div id="rq-otp-phone-wrapper-6050b61c04f0f" class="rq-otp-phone-wrapper rq-hide">
      <h3 class="rq-otp-modal-title">
        Enter Your Number      </h3>
      <div data-recaptcha="invisible" class="rq-otp-recaptcha-section" id="rq-otp-recaptcha-section-6050b61c04f0f">
        
        <div id="rq-otp-error-6050b61c04f0f" class="rq-otp-error-feedback rq-otp-error">
        </div>
        <div class="rq-otp-recaptcha-container" id="rq-otp-recaptcha-container-6050b61c04f0f"><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcMZR0UAAAAALgPMcgHwga7gY5p8QMg1Hj-bmUv&amp;co=aHR0cHM6Ly9jYXJ0c3kucmVkcS5pbzo0NDM.&amp;hl=en&amp;v=a7xT2d71Jli62wQMfeUUrLcO&amp;size=invisible&amp;cb=1fjs1kofa8na" width="256" height="60" role="presentation" name="a-m8yzycdxfbd0" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
        <button type="button" class="number-submit rq-otp-btn firebase-otp-phone-button" id="firebase-otp-phone-button-6050b61c04f0f">
          <span class="rq-otp-btn-text">
            Send Code          </span>
          <span class="rq-otp-mini-loader">
            <span class="dot1"></span>
            <span class="dot2"></span>
            <span class="dot3"></span>
          </span>
        </button>
      </div>
    </div>
    <!-- end of otp phone number input area -->

    <div id="rq-otp-code-6050b61c04f0f" class="rq-otp-code-wrapper rq-hide">
      <h3 class="rq-otp-modal-title">
        Verify Code      </h3>

      <div class="rq-otp-phone-code-input" id="rq-otp-phone-code-input-6050b61c04f0f">
        <div class="rq-otp-form-group">
          <input type="text" name="letters[]" class="letter" pattern="[0-9]*" inputmode="numeric" maxlength="1" placeholder="○">
          <input type="text" name="letters[]" class="letter" pattern="[0-9]*" inputmode="numeric" maxlength="1" placeholder="○">
          <input type="text" name="letters[]" class="letter" pattern="[0-9]*" inputmode="numeric" maxlength="1" placeholder="○">
          <input type="text" name="letters[]" class="letter" pattern="[0-9]*" inputmode="numeric" maxlength="1" placeholder="○">
          <input type="text" name="letters[]" class="letter" pattern="[0-9]*" inputmode="numeric" maxlength="1" placeholder="○">
          <input type="text" name="letters[]" class="letter" pattern="[0-9]*" inputmode="numeric" maxlength="1" placeholder="○">
        </div>
      </div>
      <!-- id rq-otp-verify-section used in js for code letter input  -->
      <div class="rq-otp-verify-section" id="rq-otp-verify-section-6050b61c04f0f">
        <input type="hidden" name="rq-otp-verify-phone" class="rq-otp-firebase-verify-phone" id="rq-otp-firebase-verify-phone-6050b61c04f0f">
        <button type="button" class="code-submit rq-otp-btn rq-otp-verify-button" id="rq-otp-verify-button-6050b61c04f0f">
          <span class="rq-otp-btn-text">
            Verify &amp; Login          </span>
          <span class="rq-otp-mini-loader">
            <span class="dot1"></span>
            <span class="dot2"></span>
            <span class="dot3"></span>
          </span>
        </button>
      </div>
    </div>
    <!-- end of otp code & verify area -->

    <!-- error feedback section -->
    <div id="rq-otp-modal-error-6050b61c04f0f" class="rq-otp-modal-error rq-otp-error-feedback"></div>

    <!-- success feedback section -->
    <div id="rq-otp-modal-success-6050b61c04f0f" class="rq-otp-modal-success rq-otp-success-feedback">
      <div class="rq-success-check-icon">
        <span class="icon-line line-tip"></span>
        <span class="icon-line line-long"></span>
        <div class="icon-circle"></div>
        <div class="icon-fix"></div>
      </div>
      <h3>
        Successful!      </h3>
    </div>
    <!-- end of rq otp modal -->
  </div>
            </div>
                    <!-- End Phone Login -->

          <!-- Start Social Login -->
          <div class="nsl-container nsl-container-block" data-align="left"><div class="nsl-container-buttons"><a href="https://cartsy.redq.io/wp-login.php?loginSocial=facebook&amp;redirect=https%3A%2F%2Fcartsy.redq.io%2Fmy-account%2F" rel="nofollow" aria-label="Continue with <b>Facebook</b>" data-plugin="nsl" data-action="connect" data-provider="facebook" data-popupwidth="475" data-popupheight="175"><div class="nsl-button nsl-button-default nsl-button-facebook" data-skin="dark" style="background-color:#1877F2;"><div class="nsl-button-svg-container"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1365.3 1365.3" height="1365.3" width="1365.3"><path d="M1365.3 682.7A682.7 682.7 0 10576 1357V880H402.7V682.7H576V532.3c0-171.1 102-265.6 257.9-265.6 74.6 0 152.8 13.3 152.8 13.3v168h-86.1c-84.8 0-111.3 52.6-111.3 106.6v128h189.4L948.4 880h-159v477a682.8 682.8 0 00576-674.3" fill="#fff"></path></svg></div><div class="nsl-button-label-container">Continue with <b>Facebook</b></div></div></a><a href="https://cartsy.redq.io/wp-login.php?loginSocial=google&amp;redirect=https%3A%2F%2Fcartsy.redq.io%2Fmy-account%2F" rel="nofollow" aria-label="Continue with <b>Google</b>" data-plugin="nsl" data-action="connect" data-provider="google" data-popupwidth="600" data-popupheight="600"><div class="nsl-button nsl-button-default nsl-button-google" data-skin="light" style="background-color:#fff;"><div class="nsl-button-svg-container"><svg xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path fill="#4285F4" fill-rule="nonzero" d="M20.64 12.2045c0-.6381-.0573-1.2518-.1636-1.8409H12v3.4814h4.8436c-.2086 1.125-.8427 2.0782-1.7959 2.7164v2.2581h2.9087c1.7018-1.5668 2.6836-3.874 2.6836-6.615z"></path><path fill="#34A853" fill-rule="nonzero" d="M12 21c2.43 0 4.4673-.806 5.9564-2.1805l-2.9087-2.2581c-.8059.54-1.8368.859-3.0477.859-2.344 0-4.3282-1.5831-5.036-3.7104H3.9574v2.3318C5.4382 18.9832 8.4818 21 12 21z"></path><path fill="#FBBC05" fill-rule="nonzero" d="M6.964 13.71c-.18-.54-.2822-1.1168-.2822-1.71s.1023-1.17.2823-1.71V7.9582H3.9573A8.9965 8.9965 0 0 0 3 12c0 1.4523.3477 2.8268.9573 4.0418L6.964 13.71z"></path><path fill="#EA4335" fill-rule="nonzero" d="M12 6.5795c1.3214 0 2.5077.4541 3.4405 1.346l2.5813-2.5814C16.4632 3.8918 14.426 3 12 3 8.4818 3 5.4382 5.0168 3.9573 7.9582L6.964 10.29C7.6718 8.1627 9.6559 6.5795 12 6.5795z"></path><path d="M3 3h18v18H3z"></path></g></svg></div><div class="nsl-button-label-container">Continue with <b>Google</b></div></div></a></div></div>          <!-- End Social Login -->

                  </div>

      </form>

    </div>

  </div>

</div>
    </div><!-- .entry-content -->

    </article><!-- #post-15 -->  </main><!-- #main -->

  
</div>







@push('scripts')
 
 @endpush
 @endsection