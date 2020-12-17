<?php include("ini.php") ?>

<body class="animsition">
    <div class="page-wrapper">
        <?php include("menu_mobile.php") ?>
        <?php include("menu.php") ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="row">
                        <!-- Début tableau vulnarabillité critiques-->
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Dernières Vulnarabilités Critiques</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Techno</th>
                                                <th>Language</th>
                                                <th>Type / Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>------------</td>
                                                <td>PHP</td>
                                                <td>Tout cassée</td>
                                            </tr>
                                            <tr>
                                                <td>linux</td>
                                                <td>------------</td>
                                                <td>Tout cassée</td>
                                            </tr>
                                            <tr>
                                                <td>Win 10</td>
                                                <td>------------</td>
                                                <td>Tout cassée</td>
                                            </tr>
                                            <tr>
                                                <td>------------</td>
                                                <td>Java</td>
                                                <td>Tout cassée</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Fin tableau vulnarabillité critiques-->
                        <!-- <div class="row">
                            <div class="col-md-12">
                                 <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                </div>
                            </div>
                        </div> -->
                        <!-- Début Box resumé vuln techno et Dev-->
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text">
                                                <h2>Java</h2>
                                                <h2>4009</h2>
                                                <span>vulnarabillité générale</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text">
                                                <h2>Windows 10</h2>
                                                <h2>8012</h2>
                                                <span>vulnarabillité générale</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text">
                                                <h2>Linux</h2>
                                                <h2>3008</h2>
                                                <span>vulnarabillité générale</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text">
                                                <h2>PHP</h2>
                                                <h2>12458</h2>
                                                <span>vulnarabillité générale</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Box resumé vuln techno et Dev-->
                        <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
