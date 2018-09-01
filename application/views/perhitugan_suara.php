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
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

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
                    <h3 class="text-primary">Hasil Perhitungan Suara</h3> </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
				<div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Hasil Perhitungan Suara Per Kandidat</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-elements">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6" style="padding-left:50px">
											<br>
                                                <table>
											<?php
											$total=0;
											foreach($kandidat->result_array() as $c) { ?>
											<tr>
												<td style="font-size:15px">Kandidat <?php echo$c['no_urut']; ?> : </td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td rowspan="3">
												<?php
													foreach($hasil_kandidat->result_array() as $j){
														
														if($c['id_calon']==$j['id_calon']){ 
														echo $j['tot']; 
														$total=$total+$j['tot'];
														}
													} ?>
													Suara </td>
											</tr>
											<tr>
												<td style="font-size:15px"><?php echo$c['nama_calon']; ?></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td style="font-size:15px"><?php echo$c['nama_wakil_calon']; ?></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td style="font-size:20px"><hr /></td>
												
											</tr>
											<?php } ?>
											</table>
											
											Total : <?php echo $total; ?> Suara<br>
											<?php foreach($dpt->result_array() as $j){ ?>
											Data Masuk : <?php echo $j['total']; ?> Suara
											<?php } ?>
                                            </div>
                                            <div class="col-lg-6">
                                                 <div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
							
							
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
	<!-- Highcharts-->
	

    <script src="<?php echo base_url(); ?>assets/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
    	
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
	
		
        <script src="<?php echo base_url()."assets/"; ?>highcharts/highcharts.js"></script>
        <script src="<?php echo base_url()."assets/"; ?>highcharts/exporting.js"></script>
		
		<!--stickey kit -->
    <script src="<?php echo base_url(); ?>assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
	
	   
   
		<style type="text/css">
        ${demo.css}
        </style>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Grafik Persentase Perhitungan Suara'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Persen',
            colorByPoint: true,
            data: [
            <?php 
                            // data yang diambil dari database
            if(count($grafikPie->num_rows())>0)
            {
             foreach ($grafikPie->result_array() as $data) {
                 echo "['Kandidat " .$data['id_calon'] . "'," . $data['jumlah'] ."],\n";
             }
         }
         ?>
         ]
     }]
 });
});
</script>
</body>

</html>