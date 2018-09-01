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
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
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
                    <h3 class="text-primary">Dashboard</h3> </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
              
                            
						<div class="card">
                            <div class="card-title">
                                <h4>Hasil Perhitungan Suara Per Kandidat</h4>
                            </div>
                            <div class="card-body">
                              
									 <div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div> 
										
										<div id="here_table">   
										</div>
                               
                                    
                                
                            </div>
							
							
                        </div>
                   
            <!-- End Container fluid  -->
            <!-- footer -->
                <?php $this->load->view('v_tampilan/footer.php'); ?>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="<?php echo base_url(); ?>assets/js/lib/jquery/jquery.min.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
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
	
	<?php
	
	?>
	<style type="text/css">
        ${demo.css}
        </style>
<script type="text/javascript">
$(function () {
    // Create the chart
   
    tableBack = function(){
     $("#container").show();
        // remove the existing table
        $('#here_table .table').remove();
    }
    var createTable = function(data) {
        
        //console.log("$series = %o", $chart);
        $("#container").hide();
        // remove the existing table
        $('#here_table .table').remove();
        
        // create a table object
        var table = $('<div class="table"><a href="#" class="back" onclick="tableBack()">back</a><table></table><br></div>').addClass('chart-table');
        
        // iterate the series object, create rows and columnts
        $.each(data, function( index, value ) {
            var row = $('<tr></tr>').addClass('chart-row');
            var col1 = $('<td></td>').text(value.name).appendTo(row);
            var col2 = $('<td></td>').text(value.y).appendTo(row);
            
            // mark the row of the clicked sector
            
            
            table.append(row);
        });
    
        // insert the table into DOM
        $('#here_table').append(table);
    };
    $('#container').highcharts({
    chart: {
        type: 'pie'  // Mentioned only pie.Need different graph on individual level.
    },
    title: {
        text: 'Persentase Hasil Suara'
    },
    xAxis: {
        type: 'category'
    },
    plotOptions: {
        series: {
            borderWidth: 1,
            dataLabels: {
                enabled: true,
            }
        }
    },
    series: [{
        id: 'toplevel',
        name: 'Kecamatan',
        data: [
		<?php foreach($kec->result_array() as $i){ ?>
		{name: '<?php echo $i['nama_kec'];?>', y: <?php echo $i['total'];?> , drilldown: '<?php echo $i['nama_kec'];?>'},<?php } ?> //Level-1
        ]
    }],
    drilldown: {
        series: [ <?php foreach($kec->result_array() as $j){
							?>
		
		{ 
            id:'<?php echo $j['nama_kec'];?>',
            name: 'Kelurahan',
            type: 'bar',
            data: [ <?php foreach($kel->result_array() as $m){
								if($j['nama_kec']==$m['nama_kec']){
			 ?>
								{name: '<?php echo $m['nama_kel'];?>', y: <?php if (empty($m['total'])){echo "0";}else{ echo $m['total'];}?>, drilldown: '<?php echo $m['nama_kel'];?>'},<?php } else{ continue;} }?>
            ] 
        },<?php } ?>
		 <?php foreach($kel->result_array() as $n){ ?>
		{                
            id:'<?php echo $n['nama_kel'];?>',
            name: 'TPS',
            type: 'pie',
            point: {
                    events: {
                        click: function () {
                            console.log(this);
							<?php foreach($tps->result_array() as $p){
								if($n['nama_kel']==$p['nama_kel']){
			 ?>
                            if(this.name == "<?php echo $p['nama_tps'];?>"){
                               var data = [<?php ?>
                {name:'Suara Tidak Sah', y:<?php if(empty($p['sts'])){
													echo "0";
												}
												else{
													echo $p['sts'];
												}?>},
				{name:'Daftar Pemilih Tetap', y:<?php if(empty($p['dpt'])){
													echo "0";
												}
												else{
													echo $p['dpt'];
												}?>},
												
												<?php foreach($hasil->result_array() as $z){
														if($p['id_ts']==$z['id_ts']){ ?>
															{name:'Kandidat <?php echo $z['id_calon'];?>', y:
															<?php if(empty($z['total_suara'])){
															echo "0";
															}
														else{
															echo $z['total_suara'];
												}?>}, <?php }else{ ?>
												{name:'Kandidat <?php echo $z['id_calon'];?>', y:0
													},<?php } ?>
												
											<?php	} ?>
                <?php } else{ continue;}?>
				
            ];
                               createTable(data);
                            }
							<?php } ?>
                            
                        }
                    }
                },
            data: [<?php foreach($tps->result_array() as $o){
								if($n['nama_kel']==$o['nama_kel']){
			 ?>
                {name: '<?php echo $o['nama_tps'];?>', y: <?php if (empty($o['dpt'])){echo "0";}else{ echo $o['dpt'];}?>}, <?php } else{ continue;} }?> //Level-3
            ] 
		 }, <?php } ?>]
    }
        });
});
</script>

</body>

</html>