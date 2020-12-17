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
                    <!-- Début tableau language spe-->
                        <div class="col-sm-6 col-lg-4">
                            <div class="au-card m-b-30">
                                <div class="au-card-inner">
                                    <h3 class="title-2 m-b-40">Language orienté Web</h3>
                                    <canvas id="pieChart1"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="au-card m-b-30">
                                <div class="au-card-inner">
                                    <h3 class="title-2 m-b-40">Language orienté Objet</h3>
                                    <canvas id="pieChart2"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="au-card m-b-30">
                                <div class="au-card-inner">
                                    <h3 class="title-2 m-b-40">Language orienté Machine</h3>
                                    <canvas id="pieChart3"></canvas>
                                </div>
                            </div>
                        </div>
                </div>    
                </div>
                <div class="container-fluid">
                <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="au-card m-b-30">
                                <div class="au-card-inner">
                                    <h3 class="title-2 m-b-40">Technologie Windows</h3>
                                    <canvas id="pieChart4"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="au-card m-b-30">
                                <div class="au-card-inner">
                                    <h3 class="title-2 m-b-40">Technologie Linux</h3>
                                    <canvas id="pieChart5"></canvas>
                                </div>
                            </div>
                        </div>
                    <!-- Début tableau vulnarabillité critiques-->
                </div>
                </div>
            </div>
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