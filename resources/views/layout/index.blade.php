<!DOCTYPE html>
<html dir="ltr" lang="en" class="no-outlines">
    <!-- Mirrored from themelooks.net/demo/dadmin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2020 11:12:25 GMT -->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Dashboard - DAdmin</title>
        <meta name="author" content="" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="icon" href="favicon.png" type="image/png" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/perfect-scrollbar.min.css" />
        <link rel="stylesheet" href="assets/css/morris.min.css" />
        <link rel="stylesheet" href="assets/css/select2.min.css" />
        <link rel="stylesheet" href="assets/css/jquery-jvectormap.min.css" />
        <link rel="stylesheet" href="assets/css/horizontal-timeline.min.css" />
        <link rel="stylesheet" href="assets/css/weather-icons.min.css" />
        <link rel="stylesheet" href="assets/css/dropzone.min.css" />
        <link rel="stylesheet" href="assets/css/ion.rangeSlider.min.css" />
        <link rel="stylesheet" href="assets/css/ion.rangeSlider.skinFlat.min.css" />
        <link rel="stylesheet" href="assets/css/datatables.min.css" />
        <link rel="stylesheet" href="assets/css/fullcalendar.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
            <div class= "wrapper">
                @include('partials.navbar')
                @include('partials.sidebar')
                @include('partials.footer')
            <main class="main--container">
                <section class="page--header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="page--title h5">Dashboard</h2>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active"><span>Dashboard</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <div class="summary--widget">
                                    <div class="summary--item">
                                        <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#009378">2,9,7,9,11,9,7,5,7,7,9,11</p>
                                        <p class="summary--title">This Month</p>
                                        <p class="summary--stats text-green">2,371,527</p>
                                    </div>
                                    <div class="summary--item">
                                        <p class="summary--chart" data-trigger="sparkline" data-type="bar" data-width="5" data-height="38" data-color="#e16123">2,3,7,7,9,11,9,7,9,11,9,7</p>
                                        <p class="summary--title">Last Month</p>
                                        <p class="summary--stats text-orange">2,527,371</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="main--content">
                    <div class="row gutter-20">
                        <div class="col-md-4">
                            <div class="panel">
                                <div class="miniStats--panel">
                                    <div class="miniStats--header bg-darker">
                                        <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#2bb3c0">5,6,9,4,9,5,3,5,9,15,3,2,2,3,9,11,9,7,20,9,7,6</p>
                                        <p class="miniStats--label text-white bg-blue"><i class="fa fa-level-up-alt"></i> <span>10%</span></p>
                                    </div>
                                    <div class="miniStats--body">
                                        <i class="miniStats--icon fa fa-user text-blue"></i>
                                        <p class="miniStats--caption text-blue">Monthly</p>
                                        <h3 class="miniStats--title h4">New Users</h3>
                                        <p class="miniStats--num text-blue">13,450</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel">
                                <div class="miniStats--panel">
                                    <div class="miniStats--header bg-darker">
                                        <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#e16123">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>
                                        <p class="miniStats--label text-white bg-orange"><i class="fa fa-level-down-alt"></i> <span>10%</span></p>
                                    </div>
                                    <div class="miniStats--body">
                                        <i class="miniStats--icon fa fa-ticket-alt text-orange"></i>
                                        <p class="miniStats--caption text-orange">Monthly</p>
                                        <h3 class="miniStats--title h4">Tickets Answered</h3>
                                        <p class="miniStats--num text-orange">450</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel">
                                <div class="miniStats--panel">
                                    <div class="miniStats--header bg-darker">
                                        <p class="miniStats--chart" data-trigger="sparkline" data-type="bar" data-width="4" data-height="30" data-color="#009378">2,2,3,9,11,9,7,20,9,7,6,5,6,9,4,9,5,3,5,9,15,3</p>
                                        <p class="miniStats--label text-white bg-green"><i class="fa fa-level-up-alt"></i> <span>10%</span></p>
                                    </div>
                                    <div class="miniStats--body">
                                        <i class="miniStats--icon fa fa-rocket text-green"></i>
                                        <p class="miniStats--caption text-green">Monthly</p>
                                        <h3 class="miniStats--title h4">Projects Launched</h3>
                                        <p class="miniStats--num text-green">3,130,300</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                </section>
                <footer class="main--footer main--footer-light">
                    <p>Copyright &copy; <a href="#">DAdmin</a>. All Rights Reserved.</p>
                </footer>
            </main>
        </div>
        <footer class="main--footer main--footer-light">
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/perfect-scrollbar.min.js"></script>
        <script src="assets/js/jquery.sparkline.min.js"></script>
        <script src="assets/js/raphael.min.js"></script>
        <script src="assets/js/morris.min.js"></script>
        <script src="assets/js/select2.min.js"></script>
        <script src="assets/js/jquery-jvectormap.min.js"></script>
        <script src="assets/js/jquery-jvectormap-world-mill.min.js"></script>
        <script src="assets/js/horizontal-timeline.min.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/jquery.steps.min.js"></script>
        <script src="assets/js/dropzone.min.js"></script>
        <script src="assets/js/ion.rangeSlider.min.js"></script>
        <script src="assets/js/datatables.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
    <!-- Mirrored from themelooks.net/demo/dadmin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2020 11:13:38 GMT -->
</html>
