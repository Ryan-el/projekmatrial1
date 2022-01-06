<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="UD CIPTA INDAH">
    <meta name="keywords" content="UD, bangunan, cirebon">
    <meta name="author" content="Sunset Orange">
    <title>Dashboard</title>
    <link rel="apple-touch-icon" href="http://127.0.0.1:8000/images/logo/logosmk.png">
    <link rel="shortcut icon" type="image/x-icon" href="http://127.0.0.1:8000/images/logo/logosmk.png">

        <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/vendors/css/forms/wizard/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/plugins/charts/chart-apex.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/pages/app-invoice-list.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/plugins/extensions/ext-component-toastr.min.css">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/css/style.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click"
    data-menu="vertical-menu-modern" data-col="">


    


    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">

                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span
                                class="user-name font-weight-bolder">ryan</span><span
                                class="user-status">Admin</span></div><span
                            class="avatar"><img class="round"
                                src="http://127.0.0.1:8000/images/profile_user/user.webp" alt="avatar" height="40"
                                width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="/user"><i class="mr-50" data-feather="user"></i>
                            Profile</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout"><i class="mr-50" data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="">
                        <img src="https://pbs.twimg.com/profile_images/1163911054788833282/AcA2LnWL_400x400.jpg" height="40" width="40">
                        <h3 class="brand-text">Project</h3>
                    </a></li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                        <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                        
                    </a>
                </li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <hr>
                

                
                    
                                            <li class="active nav-item">
                        
                    <a class="d-flex align-items-center" href="/dashboard"><i
                            data-feather="user-plus"></i><span class="menu-title text-truncate"
                            data-i18n="Calendar">Dashboard</span>
                    </a>
                
                    
                                            <li class=" nav-item">
                    
                    <a class="d-flex align-items-center" href="/transaksi"><i
                            data-feather="user"></i><span class="menu-title text-truncate"
                            data-i18n="Calendar">Friends</span>
                    </a>
                
                    
                                            <li class=" nav-item">
                    
                    <a class="d-flex align-items-center" href="/settings"><i
                            data-feather="users"></i><span class="menu-title text-truncate"
                            data-i18n="Calendar">Groups</span>
                    </a>
                
                
                
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <br>
            <br>
            <br>
            <br>
            <br>
         
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Registered Account</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-plane"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                            </tr>
                            <tr>
                                <th scope="col">1.</th>
                                <th scope="col">Ayu</th>
                                <th scope="col">admin@gmail.com</th>
                   
                            </tr>
                            <tr>
                                <th scope="col">2.</th>
                                <th scope="col">Tomi</th>
                                <th scope="col">sales@gmail.com</th>
                   
                            </tr>
                            <tr>
                                <th scope="col">3.</th>
                                <th scope="col">Deno</th>
                                <th scope="col">sales2@gmail.com</th>
                   
                            </tr>
                            <tr>
                                <th scope="col">4.</th>
                                <th scope="col">Wahyu</th>
                                <th scope="col">sales3@gmail.com</th>
                   
                            </tr>
                            <tr>
                                <th scope="col">5.</th>
                                <th scope="col">ryan</th>
                                <th scope="col">ryannathanael75@gmail.com</th>
                         
                            </tr>
                  
                    </table>
                </div>
            </div>
        </div>


    <!-- BEGIN: Customizer-->
    
    <!-- End: Customizer-->

    <!-- Buynow Button-->
    

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy;
                2022<a class="ml-25">Sunset Orange</a><span class="d-none d-sm-inline-block">, All
                    rights
                    Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i
                    data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    <script src="http://127.0.0.1:8000/vendors/js/extensions/toastr.min.js"></script>
    

    <!-- BEGIN: Vendor JS-->
    <script src="http://127.0.0.1:8000/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->

    <script src="http://127.0.0.1:8000/vendors/js/charts/apexcharts.min.js"></script>
    <script src="http://127.0.0.1:8000/vendors/js/extensions/toastr.min.js"></script>
    <script src="http://127.0.0.1:8000/vendors/js/extensions/moment.min.js"></script>
    <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="http://127.0.0.1:8000/vendors/js/tables/datatable/responsive.bootstrap.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="http://127.0.0.1:8000/js/core/app-menu.min.js"></script>
    <script src="http://127.0.0.1:8000/js/core/app.min.js"></script>
    <script src="http://127.0.0.1:8000/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="http://127.0.0.1:8000/js/scripts/pages/dashboard-analytics.min.js"></script>
    <script src="http://127.0.0.1:8000/js/scripts/pages/app-invoice-list.min.js"></script>
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>

  
    <script src="http://127.0.0.1:8000/js/scripts/components/components-bs-toast.min.js"></script>
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

    <script>
        function myFunction() {
            var x = document.getElementById("toast");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

</body>
<!-- END: Body-->

</html>