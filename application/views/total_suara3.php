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
                    <h3 class="text-primary">Total Suara</h3> </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
				<?php
				$z=$kec;
			
				?>
                        <div class="card">
						<input type="button" class="btn btn-default" value="Kembali ke Kelurahan" onclick="window.location = '../../getTotalSuaraKel/<?php echo $z; ?>'"/>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nama TPS</th>
												<th>Daftar Pemilih Tetap</th>
												<th>Suara Tidak Sah</th>
												<?php foreach($kandidat->result_array() as $a){ ?>
												<th><?php echo "Kandidat "; echo $a['no_urut']; ?></th>
												<?php } ?>
												
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										$sts=0;
										$dpt=0;
										$hasilnya=array(0,0,0,0);
												foreach($data->result_array() as $i){
												?>
                                            <tr>
                                                <td><?php echo $i['nama_tps']; ?></td>
												
												<td><?php 
												if(empty($i['dpt'])){
													echo "0";
												}
												else{
													echo $i['dpt'];
													$dpt=$dpt+$i['dpt'];
												}
												?></td>
												<td><?php 
												if(empty($i['sts'])){
													echo "0";
												}
												else{
													echo $i['sts'];
													$sts=$sts+$i['sts'];
												}
												?></td>
												<?php
												
													foreach($hasil->result_array() as $b){
														
														?><?php 
														if($i['id_ts']==$b['id_ts']){
															//echo $i['id_ts']; echo "<br>"; echo $b['id_ts'];
															if(!empty($b['ts'])){
																?><td><?php
																echo $b['ts']; 
																?></td><?php
																
																if($b['id_calon']==1){
																	$hasilnya[0]=$hasilnya[0]+$b['ts'];
																}else if($b['id_calon']==2){
																	$hasilnya[1]=$hasilnya[1]+$b['ts'];
																}else if($b['id_calon']==3){
																	$hasilnya[2]=$hasilnya[2]+$b['ts'];
																}else{
																	$hasilnya[3]=$hasilnya[3]+$b['ts'];
																}
															}else{
																foreach($kandidat->result_array() as $p){
																	?><td>0</td><?php
																} break;
															}
															
														} else {
															
														}
														
														} 
														?>
                                            </tr>
												<?php } ?>
												<tr>
										<td>Total</td>
										<td><?php echo $dpt; ?></td>
										<td><?php echo $sts; ?></td>
										<td><?php echo $hasilnya[0];?></td>
										<td><?php echo $hasilnya[1];?></td>
										<td><?php echo $hasilnya[2];?></td>
										<td><?php echo $hasilnya[3];?></td>
										</tr>
                                        </tbody>
                                    </table>
									
                                </div>
								

								
								
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
	
	   
    </script>

</body>

</html>