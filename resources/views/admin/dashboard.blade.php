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
<div class="app-content content dashboard">
    <div class="content-wrapper">
      <div class="content-body"> 
        <!-- Basic form layout section start -->
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card ">
                <div class="card-content collapse show">
                  <div class="card-dashboard">
                    <div class="row">
                      <div class="col-12">
                        <h1>Dashboard</h1>
                      </div>
                      <div class="col-xl-6 col-lg-6  col-12 d-flex w-100  ">
                        <div class="box">
                          <h2>Quick Stats</h2>
                          <h3>Average Monthly<br>
                            Feedbacks</h3>
                          <div id="sellPerCirc" class="perCirc">
                            <div class="perCircInner">
                              <div class="perCircStat">0%</div>
                              <div></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-12 d-flex w-100  ">
                        <div class="box">
                          <h2>Average Monthly</h2>
                          <h3>Estimation Requests</h3>
                          <br>
                          <div id="sellPerCirc1" class="perCirc">
                            <div class="perCircInner">
                              <div class="perCircStat">0%</div>
                              <div></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="bottom tickets">
                      <div class="row">
                        <div class="col-12">
                          <h2>Request</h2>
                        </div>
                      </div>
                      <div class="chart-main position-relative">
                        <div class="row">
                          <div class="col-xl-1 col-12">
                            <h4>No. of request</h4>
                          </div>
                          <div class="col-12 col-xl-11">
                            <div id="column-chart" class="height-400 echart-container"></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 text-center">
                            <h3>Months</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
@stop



