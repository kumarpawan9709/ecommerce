<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') | {{config('app.name')}}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/css/jvector.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/mat_design.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/bundle.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    @stack('css')
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
     
  <style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style></head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
       @include('layouts.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('layouts.header')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
          @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('layouts.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> -->
    <script src="{{asset('admin/js/jquery.js')}}"></script>
    <script src="{{asset('admin/js/file-upload.js')}}"></script>
    <script src="{{asset('admin/js/vendorbundle.js')}}"></script>
    <script src="{{asset('admin/js/misc.js')}}"></script>
    @stack('scripts')
    <!-- End custom js for this page -->
  
<div class="jvectormap-tip"></div></body></html>