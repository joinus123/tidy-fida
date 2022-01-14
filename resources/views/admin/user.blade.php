@extends('admin/layout')
@section('nav_bar')
<style>
  table td img {
    width: 30px;
    height: 30px;
    margin-right: 10px;
    border-radius: 50%;
}
</style>
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
<div class="app-content content menu ">
    <div class="content-wrapper">
      <div class="content-body"> 
        <!-- Basic form layout section start -->
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card rounded pad-20">
                <div class="card-content collapse show">
                  <div class="card-body  card-dashboard">
                    <div class="row">
                      <div class="col-xl-12 col-12">
                      @if(Session::has('message'))
                      <p class="{{Session::get('class')}}">{{Session::get('message')}}</p>
                      @endif
 <h1 class="pull-left">User Log</h1>
                      </div>
                      <p>
                        <a class="btn btn-primary" href="{{route('view-employeeform')}}"><span class="glyphicon glyphicon-plus"></span> Add Employee</a>
                    </p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="maain-tabble table-responsive">
                      <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                          <tr>
                          
                            <th>S.no</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>contact</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                      @foreach ($user as $data)
                          
                     
                          <tr>
                         
                            <td>{{$data['id']}}</td>
                            <td><img src="images/table-img.png"> {{$data['fullname']}}</td>
                            <td><img src="images/table-img.png"> {{$data['lastname']}}</td>
                            <td>{{$data['email']}}</td>
                            <td>   
                               <img src="images/{{ $data['img'] }}" alt="">
                            </td>
                            <td>{{$data['phone_number']}}</td>
                            <td><div class="btn-group mr-1 mb-1">
                                <button type="button" class="btn btn-drop-table btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                <div class="dropdown-menu" > 
                                  <a class="dropdown-item" href="#" > <i class="fa fa-eye"></i>View </a>  
                                  <a class="dropdown-item" href="{{route('employee_edit',$data['id'])}}"  > <i class="fa fa-edit"></i>Edit</a>
                                  <a class="dropdown-item" href="{{route('delete',$data['id'])}}" > <i class="fa fa-trash"></i>Delete</a></div>
                              </div></td>
                             
                          </tr>
                          @endforeach
                        
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!--main card end--> 
                
              </div>
            </div>
          </div>
        </section>
        <!-- // Basic form layout section end --> 
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
                    button type="button" class="blue-btn" id="delete-menu">Yes </button>
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