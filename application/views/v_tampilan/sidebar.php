<!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
			<?php
			
			$login=$this->session->userdata('username');
			if(isset($login)){
			?>
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
						<li> <a href="<?php echo base_url()."c_admin/index"; ?>" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Home</span></a>
                        </li>
						<li> 
						<a href="#" aria-expanded="false" class="has-arrow "><i class="fa fa-envelope"></i><span class="hide-menu">SMS</span></a>
						<ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url()."c_sms/daftar_notelp"; ?>">Daftar No Telp</a></li>
                                <li><a href="<?php echo base_url()."c_sms/getMonitoring"; ?>">Log Status SMS</a></li>
                            </ul>
                        </li>
                        <li> <a href="<?php echo base_url()."c_sms/getInbox"; ?>" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Inbox</span></a>
                        </li>
                        <li> <a href="<?php echo base_url()."c_sms/getKandidat"; ?>"aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Kandidat</span></a>
                        </li>
						<li> <a href="<?php echo base_url()."c_sms/getTotalSuaraKec"; ?>" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Total Suara</span></a>
                        </li>
						<li> <a href="<?php echo base_url()."c_sms/getHasilPerhitungan"; ?>" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Hasil Perhitungan Suara</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
			<?php }
			else{
				?>
				 <div class="scroll-sidebar">
                
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
						<li> <a href="<?php echo base_url()."c_admin/index"; ?>" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">Home</span></a>
                        </li>
						<li> <a href="<?php echo base_url()."welcome/getTotalSuaraKec"; ?>" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Total Suara</span></a>
                        </li>
						<li> <a href="<?php echo base_url()."welcome/getHasilPerhitungan"; ?>" aria-expanded="false"><i class="fa fa-bar-chart"></i><span class="hide-menu">Hasil Perhitungan Suara</span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
				
			<?php } ?>
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->