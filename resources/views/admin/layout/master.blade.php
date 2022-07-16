<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Nice lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Nice admin lite design, Nice admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Nice Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ecommerce Admin</title>
    <link rel="canonical" href="{{asset('https://www.wrappixel.com/templates/niceadmin-lite/')}}" />
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css')}}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('adminCss/assets/images/favicon.png')}}">
    <!-- Custom CSS -->
    <link href="{{asset('adminCss/assets/libs/chartist/dist/chartist.min.css')}}" rel="stylesheet">
   
    {{-- {{asset('css/bootstrap.min.css')}} --}}
    <link href="{{asset('adminCss/dist/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('adminCss/assets/up.css')}}" rel="stylesheet">

   
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="{{url('/dasboard')}}" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">


                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                            
                                <!-- Light Logo icon -->
                                <img src="{{asset('adminCss/assets/images/logo1.png')}}" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                            </span>
                        </a>
                    </div>
                   
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin6">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="{{route("admin.show")}}">
                             <span class="company_name">Company Name </span>

                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a id="logout" class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" role="button" href="#">
                                <i class="ti-user me-1 ms-1"></i>
                            </a>
                            
                                <div id="logout_div" style="display: none">
                                    <form method="POST" action="{{route('logout')}}">
                                        @csrf
                                        <button  type="submit"  tyle="
                                        outline: none;
                                        border: none;
                                        background: none;
                                        display: inline;"> Logout</button>
                                        </form>
                                 </div>
                               
                        </li>
                       
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar custom_sidebar_new" data-sidebarbg="skin5" style="top:42px !important">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" >
                                 <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.show')}}"
                                aria-expanded="false">
                                <i class="bi bi-info-circle"></i>
                                <span class="hide-menu">Dashboard </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.show')}}"
                                aria-expanded="false">
                                <i class="bi bi-info-circle"></i>
                                <span class="hide-menu">Products</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.show')}}"
                                aria-expanded="false">
                                <i class="bi bi-info-circle"></i>
                                <span class="hide-menu">Order</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.adminShow')}}"
                                aria-expanded="false">
                                <i class="bi bi-info-circle"></i>
                                <span class="hide-menu">Create Admin Account </span>
                            </a>
                        </li>

                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href=""
                                aria-expanded="false">
                                <i class="bi bi-person-plus"></i>
                                <span class="hide-menu">গ্যালারি দেখুন</span>
                            </a>
                        </li> --}}

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!--         -->


       @yield('content')
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    </div>

    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('adminCss/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('adminCss/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('adminCss/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('adminCss/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('adminCss/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('adminCss/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('adminCss/assets/libs/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('adminCss/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('adminCss/dist/js/pages/dashboards/dashboard1.js')}}"></script>


    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>


    <script>
        $(document).ready(function(){
            $('#datatable').dataTable();
            // $('#TableId').DataTable( "dom": '<"pull-left"f><"pull-right"l>tip' );
        });

       $(document).ready(function () {
var clicks = 0;
           $('#logout').on('click',function(){
                //  alert('ok');
                if(clicks==0)
                {
                    $('#logout_div').show();
                     clicks=1;
                } else{
                    $('#logout_div').hide();
                     clicks=0;
                }
           
            });
                        

        });

  </script>


    @yield('javaScript')
</body>

</html>
