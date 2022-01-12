<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title>Urena</title>
<link rel="shortcut icon" href="images/favicon.ico"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
<!-- END VENDOR CSS-->
<!-- BEGIN STACK CSS-->
<link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
<!-- END STACK CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
<!-- END Page Level CSS-->
<link rel="stylesheet" type="text/css" href="app-assets/css/plugins/calendars/fullcalendar.css">
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/calendars/fullcalendar.min.css">
<!-- BEGIN Custom CSS-->
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css" type="text/css">
<link rel="stylesheet" href="assets/css/CustomScrollbar.css" type="text/css">
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
<!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded " data-open="click" data-menu="vertical-menu" data-col="2-columns">
    <!--login page start here-->
    
    <section class="register loginn ">
      <div class="container">
        <div class="login-inner">
          <div class="row d-flex">
            <div class="col-lg-6 offset-lg-3 col-12">
              <div class="right"> <img src="images/login-logo.png" class="img-fluid" alt="" />
                <div class="row ">
                  <div class="col-12 text-center">
                    <h1>Admin Login</h1>
                  </div>
                </div>
                <form action="{{route('login-process')}}" method="post">
                    @csrf
                  <div class="row">
                    <div class="col-12 form-group">
                      <input type="email" contenteditable="true" spellcheck="true" class="form-control" name="email" placeholder="Email Address" />
                      <i class="fa fa-envelope"></i> </div>
                    <div class="col-12 form-group position-relative">
                      <input type="password" class="form-control" name="password" placeholder="Password"/>
                      <i class="fa fa-lock"></i>
                      <button class="view-btn position-absolute"> <i class="fa fa-eye-slash"></i> </button>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="">
                      <label class="login-check">Remember Me
                        <input type="checkbox"/>
                        <span class="checkmark"></span></label>
                    </div>
                    <div class=""> <a href="password-recovery.html" class="forgot"> Forgot Password?</a> </div>
                  </div>
                  <button type="submit" class="blue-btn">login</button>
                  <div class="new-user forget-pass"> <a href="{{route('view-register')}}" class="login form-control"><i class="fa fa-arrow-circle-left"></i>Are Already you Login?Register Here</a></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- login-popup modal start here-->
    <div class="login-fail-main">
      <div class="featured inner">
        <div class="modal fade bd-example-delete-modal-lg another-modal another-modal-with-buttons delete-modal " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lgg">
            <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              <div class="payment-modal-main">
                <div class="payment-modal-inner">
                  <form action="">
                    <div class="row">
                      <div class="col-12"> <img src="images/login.png" class="img-fluid" alt="">
                        <p>Your account has been blocked by the admin.</p>
                        <p>You can continue working on your current assigned tickets but will not be recieving any new tickets.</p>
                      </div>
                      <div class="col-12 text-center">
                        <button type="button" class="blue-btn" id="login-2">Continue </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- login-popup modal end here--> 
    
    <!--login-2 modal start here-->
    <div class="login-fail-main">
      <div class="featured inner">
        <div class="modal fade login-2-modal another-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lgg">
            <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              <div class="payment-modal-main">
                <div class="payment-modal-inner">
                  <form action="">
                    <div class="row">
                      <div class="col-12"> <img src="images/login.png" class="img-fluid" alt="">
                        <p>Your account has been blocked by the admin.</p>
                        <p>You cannot login to your account anymore.</p>
                      </div>
                      <div class="col-12 text-center">
                        <button type="button" class="blue-btn" data-dismiss="modal">close </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--login-2 modal end here--> 
    
    <!--login page end here--> 
    <!-- BEGIN VENDOR JS--> 
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script> 
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script><script src="app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script> 
    <script src="app-assets/js/scripts/tables/datatables/datatable-basic.js" type="text/javascript"></script> 
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script> 
    <script src="app-assets/vendors/js/charts/echarts/echarts.js" type="text/javascript"></script> 
    <script src="app-assets/vendors/js/extensions/moment.min.js" type="text/javascript"></script> 
    <script src="app-assets/vendors/js/extensions/fullcalendar.min.js" type="text/javascript"></script> 
    <script src="app-assets/js/scripts/extensions/fullcalendar.js" type="text/javascript"></script> 
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script> 
    <script src="app-assets/js/core/app.js" type="text/javascript"></script> 
    <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script> 
    <script src="app-assets/js/scripts/modal/components-modal.js" type="text/javascript"></script> 
    <script src="assets/js/function.js"></script> 
    <!-- BEGIN VENDOR JS--> 
    <!-- BEGIN VENDOR JS--> 
    <!-- BEGIN PAGE VENDOR JS--> 
    <!-- END PAGE VENDOR JS--> 
    <!-- BEGIN STACK JS-->
    </body>
    </html>