<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="<?php echo base_url(); ?>assets/image/png" sizes="16x16" href="images/favicon.png">
    <title>Sistem Perhitungan Suara Cepat</title>
	
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/css/helper.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
		<!-- library jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

		<!-- bootstrap js -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
</head>

<body class="fix-header fix-sidebar">
    
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- /.Header -->
                <?php $this->load->view('v_tampilan/header.php'); ?>
                <!-- /.Header -->
				
				 <!-- /.sidebar -->
                <?php $this->load->view('v_tampilan/sidebar.php'); ?>
                <!-- /.sidebar -->
        
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Tambah No Telp</h3> </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
				
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Tambah No Telp Saksi</h4>
									<form method="POST" action="">
										<div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Nama Kecamatan</p>
                                            <div class="col-lg-6">
											<select class="form-control input-rounded" id="kec" name="kec" required onchange="getKel(this.value)">
                                                    <option value="">Silahkan Pilih Nama Kecamatan</option>
												<?php
													foreach($kec->result_array() as $a){
													?>
                                                    <option value="<?php echo $a['id_kec']; ?>"><?php echo $a['nama_kec']; ?></option>
													<?php } ?>
                                                </select>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Nama Kelurahan</p>
                                            <div class="col-lg-6">
											<select class="form-control input-rounded" id="kel" name="kel" required>
                                                   <option value="">Silahkan Pilih Nama Kelurahan</option>
													
                                                </select>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <p class="text-muted m-b-15 f-s-12">Nama TPS</p>
                                            <div class="col-lg-6">
											<select class="form-control input-rounded" id="tps" name="tps" required>
                                                    <option value="">Silahkan Pilih</option>
												<?php
													foreach($tps->result_array() as $i){
													?>
                                                    <option value="<?php echo $i['nama_tps']; ?>"><?php echo $i['nama_tps']; ?></option>
													<?php } ?>
                                                </select>
                                            </div>
                                        </div>
										<div class="col-lg-6">
                                            <p class="text-muted m-b-15 f-s-12">No Telp</p>
                                            <input type="number" class="form-control input-rounded" placeholder="No Telp" required>
                                        </div><br>
										<div class="col-lg-3">
                                            <input type="button" class="form-control input-rounded" value="Tambah">
                                        </div>
                                    </form>
								
                            </div>
                        </div>

            <!-- footer -->
                <?php $this->load->view('v_tampilan/footer.php'); ?>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
	
	

    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?php echo base_url(); ?>assets/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


    <script src="<?php echo base_url(); ?>assets/js/lib/datamap/d3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datamap/topojson.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datamap/datamaps.world.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datamap/datamap-init.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/weather/weather-init.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/owl-carousel/owl.carousel-init.js"></script>


    <script src="<?php echo base_url(); ?>assets/js/lib/chartist/chartist.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/chartist/chartist-init.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
	
	<script src="<?php echo base_url(); ?>assets/js/lib/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/datatables/datatables-init.js"></script>

	   
    
</body>

</html>