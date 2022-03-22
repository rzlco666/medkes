            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card" id="tooltip-container">
                                    <div class="card-body">
                                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                                        <h4 class="mt-0 font-16">Total Pasien Terdaftar</h4>
                                        <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><?= $pasien ?></span> Pasien</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card" id="tooltip-container1">
                                    <div class="card-body">
                                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                                        <h4 class="mt-0 font-16">Sedang Konsultasi</h4>
                                        <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><?= $proses_konsultasi ?></span> Konsultasi</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card" id="tooltip-container2">
                                    <div class="card-body">
                                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                                        <h4 class="mt-0 font-16">Selesai Konsultasi</h4>
                                        <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><?= $selesai_konsultasi ?></span> Konsultasi</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card" id="tooltip-container3">
                                    <div class="card-body">
                                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                                        <h4 class="mt-0 font-16">Total Dokter Terdaftar</h4>
                                        <h2 class="text-primary my-3 text-center"><span data-plugin="counterup"><?= $dokter ?></span> Dokter</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end d-none d-md-inline-block">
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-xs btn-secondary">Today</button>
                                                <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                                <button type="button" class="btn btn-xs btn-light">Monthly</button>
                                            </div>
                                        </div>
                                        <h4 class="header-title">Revenue</h4>
                                        <div class="row mt-4 text-center">
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                <h4><i class="fe-arrow-down text-danger me-1"></i>$7.8k</h4>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                <h4><i class="fe-arrow-up text-success me-1"></i>$1.4k</h4>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                <h4><i class="fe-arrow-down text-danger me-1"></i>$15k</h4>
                                            </div>
                                        </div>
                                        <div class="mt-3 chartjs-chart">
                                            <canvas id="revenue-chart" data-colors="#1fa083,#f1556c" height="300"></canvas>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end d-none d-md-inline-block">
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-xs btn-secondary">Today</button>
                                                <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                                <button type="button" class="btn btn-xs btn-light">Monthly</button>
                                            </div>
                                        </div>
                                        <h4 class="header-title">Projections Vs Actuals</h4>
                                        <div class="row mt-4 text-center">
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                                <h4><i class="fe-arrow-down text-danger me-1"></i>$3.8k</h4>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                                <h4><i class="fe-arrow-up text-success me-1"></i>$1.1k</h4>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                                <h4><i class="fe-arrow-down text-danger me-1"></i>$25k</h4>
                                            </div>
                                        </div>
                                        <div class="mt-3 chartjs-chart">
                                            <canvas id="projections-actuals-chart" data-colors="#4a81d4,#e3eaef" height="300"></canvas>
                                        </div>
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> &copy; Media Kesehatan
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


            </div>
            <!-- END wrapper -->
