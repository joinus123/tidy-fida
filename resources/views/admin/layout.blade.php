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
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css" type="text/css">
<link rel="stylesheet" href="assets/css/CustomScrollbar.css" type="text/css">
<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
<!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
@yield('nav_bar')

<!-- ////////////////////////////////////////////////////////////////////////////-->


<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
 <div class="main-menu-content">
   <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
     <li class="nav-item active"><a href="{{route('dashboard')}}"><i class="fa fa-home"></i><span class="menu-title" data-i18n="">Dashboard </span></a></li>
     <li class="nav-item "><a href="#"><i class="fa fa-file-alt"></i><span class="menu-title" data-i18n="">Estimation Request</span></a></li>
     <li class="nav-item "><a href="{{route('user')}}"><i class="fa fa-users"></i><span class="menu-title" data-i18n="">Users</span></a></li>
     <li class="nav-item "><a href="#"><i class="fas fa-comment-alt"></i><span class="menu-title" data-i18n="">feedback</span></a></li>
   </ul>
 </div>
</div>



@yield('main_content')
<!-- ///////////////////////////////////////////////////////////////s/////////////--> 

<!-- BEGIN VENDOR JS--> 

<script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script> 
<script src="app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script> 
<script src="assets/js/chart.js" type="text/javascript"></script> 
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script src="app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script> 
<script src="app-assets/js/scripts/tables/datatables/datatable-basic.js" type="text/javascript"></script> 
<script src="app-assets/vendors/js/charts/echarts/echarts.js" type="text/javascript"></script> 
<script src="app-assets/vendors/js/extensions/moment.min.js" type="text/javascript"></script> 
<script src="app-assets/js/core/app-menu.js" type="text/javascript"></script> 
<script src="app-assets/js/core/app.js" type="text/javascript"></script> 
<script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script> 
<script src="app-assets/js/scripts/modal/components-modal.js" type="text/javascript"></script> 
<script src="assets/js/function.js" type="text/javascript"></script> 

<!-- BEGIN VENDOR JS--> 
<!-- BEGIN VENDOR JS--> 
<!-- BEGIN PAGE VENDOR JS--> 
<!-- END PAGE VENDOR JS--> 
<!-- BEGIN STACK JS--> 


<script>
        // Set paths
        // ------------------------------

        require.config({
            paths: {
                echarts: 'app-assets/vendors/js/charts/echarts'
            }
        });


        // Configuration
        // ------------------------------

        require(
            [
                'echarts',
                'echarts/chart/bar',
                'echarts/chart/line',
                'echarts/chart/scatter',
                'echarts/chart/pie'
            ],


            // Charts setup
            function(ec) {

                // Initialize chart
                // ------------------------------
                var myChart = ec.init(document.getElementById('column-chart'));

                // Chart Options
                // ------------------------------
                chartOptions = {

                    // Setup grid
                    grid: {
                       x: 60,
                        x2: 60,
                        y: 45,
                        y2: 25
                    },

                    // Add tooltip
                    tooltip: {
                        trigger: 'axis'
                    },

                    // Add legend

                    // Add custom colors
                    color: ['#191919', '#476bc4', '#191919'],

                    // Enable drag recalculate
                    calculable: true,

                    // Horizontal axis
                    xAxis: [{
                        type: 'category',
                        data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                    }],

                    // Vertical axis
                    yAxis: [{
                            type: 'value',
                            name: 'Water',
                            axisLabel: {
                                formatter: '{value} ml'
                            }
                        },
                        {
                            type: 'value',
                            name: 'Temperature',
                            axisLabel: {
                                formatter: '{value} °C'
                            }
                        }
                    ],

                    // Add series
                    series: [{
                            name: 'Evaporation',
                            type: 'bar',
                            data: [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3]
                        },
                        {
                            name: 'Precipitation',
                            type: 'bar',
                            data: [2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3]
                        },
                        
                    ]
                };

                // Apply options
                // ------------------------------

                myChart.setOption(chartOptions);


                // Resize chart
                // ------------------------------

                $(function() {

                    // Resize chart on menu width change and window resize
                    $(window).on('resize', resize);
                    $(".menu-toggle").on('click', resize);

                    // Resize function
                    function resize() {
                        setTimeout(function() {

                            // Resize chart
                            myChart.resize();
                        }, 200);
                    }
                });
            }
        );

	// change the value below from 80 to whichever percentage you want
perCirc($('#sellPerCirc'), 80);
	perCirc($('#sellPerCirc1'), 60);

function perCirc($el, end, i) {
  if (end < 0)
    end = 0;
  else if (end > 100)
    end = 100;
  if (typeof i === 'undefined')
    i = 0;
  var curr = (100 * i) / 360;
  $el.find(".perCircStat").html(Math.round(curr) + "%");
  if (i <= 180) {
    $el.css('background-image', 'linear-gradient(' + (90 + i) + 'deg, transparent 50%, #ccc 50%),linear-gradient(90deg, #ccc 50%, transparent 50%)');
  } else {
    $el.css('background-image', 'linear-gradient(' + (i - 90) + 'deg, transparent 50%, #1e6892 50%),linear-gradient(90deg, #ccc 50%, transparent 50%)');
  }
  if (curr < end) {
    setTimeout(function() {
      perCirc($el, end, ++i);
    }, 1);
  }
}

	

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"  referrerpolicy="no-referrer"></script>
    <script>
      @if(Session::has('success'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
          toastr.success("{{ session('success') }}");
      @endif
    
      @if(Session::has('error'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
          toastr.error("{{ session('error') }}");
      @endif
    
      @if(Session::has('info'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
          toastr.info("{{ session('info') }}");
      @endif
    
      @if(Session::has('warning'))
      toastr.options =
      {
        "closeButton" : true,
        "progressBar" : true
      }
          toastr.warning("{{ session('warning') }}");
      @endif
    </script>


</body>
</html>
