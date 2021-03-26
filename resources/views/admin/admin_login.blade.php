
<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/css/jvector.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/mat_design.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/bundle.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
  </head>
  <style>
  .auth.login-bg {
    background: url(../admin/images/auth/Login_bg.jpg);
    background-size: cover;
}
  </style>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form method="POST" action="">
                {{ csrf_field() }}
                  <div class="form-group">
                    <label>Username or email *</label>
                    <input type="text" name="username" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="password" name="password" class="form-control p_input">
                  </div>
                   
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                   
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
 
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
   
    
    <script src="{{asset('admin/js/misc.js')}}"></script>
    <!-- endinject -->
  
</body></html>