@extends('admin/layout')
@section('nav_bar')
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item"> <a class="navbar-brand" href="dashboard.html"> <img class="brand-logo img-fluid" alt="stack admin logo" src="images/logo.png"> </a> </li>
          <li class="nav-item d-md-none"> <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a> </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
          </ul>
          <ul class="nav navbar-nav float-right">
            
            <li class="dropdown dropdown-user nav-item"> <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"> <img src="app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"> </span> <span class="user-name">John Doe</span> </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-power-off"></i>Logout</a> </div>
            </li>
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
          </ul>
        </div>
      </div>
    </div> 
  </nav>
  @stop

  
@section('main_content')

<div class="app-content content add-item admin-profile">
    <div class="content-wrapper">
      <div class="content-body"> 
        <!-- Basic form layout section start -->
        <section id="configuration">
          <div class="row">
                      <div class="col-lg-6 offset-lg-3 col-12">
                        <div class="box">
                         <div class="col-12 d-flex justify-content-between align-items-center">
                        <h1 class="pull-left">Edit Employee</h1>
                        </div>
                         <form action="{{route('update-employee', $employee->id)}}" method="post"  enctype="multipart/form-data">
                             @csrf
                            <div class="row">
                      
                              <div class="col-12 form-group">
                                <div class="attached">     <img src="{{asset('images/'.$employee->img)}}" alt="">
                                  <button name="file" type="button"  class="camera-btn" onclick="document.getElementById('upload').click()"><i class="fa fa-camera"></i></button>
                                  <input type="file" name="image" id="upload" name="file">
                                </div>
                              </div>
                              <div class="col-12 form-group">
                                <label for="">First Name </label>
                                <input  type="text" contenteditable="true"  spellcheck="true" value="{{$employee->fullname}}"  name="fullname"  class="form-control" placeholder="Full Name">
                              </div>
                              <div class="col-12 form-group">
                                <label for="">Last Name </label>
                                <input type="text" contenteditable="true" spellcheck="true" value="{{$employee->lastname}}" name="lastname" class="form-control" placeholder="Last Name">
                              </div>
                             <div class="col-12 form-group">
                                <label for="">Email</label>
                                <input  type="email" contenteditable="true" spellcheck="true" value="{{$employee->email}}" name="email"  class="form-control" placeholder="Email ">
                              </div>

                              <div class="col-12 form-group">
                                <label for="">Phone Number</label>
                                <input type="number" contenteditable="true" spellcheck="true"   value="{{$employee->phone_number}}" name="phone_number"   class="form-control" placeholder="Phone Number">
                              </div>
                              
                              
                             
                              <div class="col-12 form-group text-center">
                                <button type="submit" class="blue-btn w-100" >update</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
        </section>
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  
  
  <!-- block modal start here-->
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
                   <div class="col-12">
   <img src="images/block-icon.png" class="img-fluid" alt="">
                     <p>Are you sure you want to unblock this user?</p>
                   </div>
                   <div class="col-12 text-center">
                     <button type="button" class="blue-btn mr-1" data-dismiss="modal">No</button>
   <button type="button" class="blue-btn" id="delete-menu">Yes </button>
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
  
  <!-- block modal end here--> 
  
  
  <!--confirm block  modal start here-->
  <div class="login-fail-main">
   <div class="featured inner">
     <div class="modal fade confirm-delete-modal another-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lgg">
         <div class="modal-content">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
           <div class="payment-modal-main">
             <div class="payment-modal-inner">
               <form action="">
                 <div class="row">
                   <div class="col-12">
   <img src="images/check.png" class="img-fluid" alt="">
                     <p>Abc user has been unblocked</p>
                   </div>
                   <div class="col-12 text-center">
                     <button type="button" class="blue-btn" data-dismiss="modal">Got It </button>
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
@stop