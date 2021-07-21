<nav class="topnavbar navbar-default topnav" style="background-color: black;">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
						<span class="sr-only"> Toggle navigaion</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand logo" href="#"><img src="<?php echo base_url();?>assets/image/kos_putri.png" alt="logo" style="width: 200px;"></a>
				</div>	 
			</div>
			<div class="collapse navbar-collapse" id="upmenu">
				<ul class="nav navbar-nav" id="navbarontop">
					<li class="active"><a href="<?php echo base_url()."index.php/Welcome/Index";?>" style="color: #808080;">BERANDA</a></a> </li>
					<li class="active"><a href="<?php echo base_url()."index.php/Welcome/Info";?>" style="color: #808080;">DAFTAR KAMAR KOST</a> </li>
					<li class="active"><a href="<?php echo base_url()."index.php/Welcome/Fasilitas";?>" style="color: #808080;">FASILITAS UMUM</a> </li>
					<li class="dropdown">
					<li class="active"><a href="<?php echo base_url()."index.php/Welcome/Kontak";?>" style="color: #808080;">KONTAK</a> </li>
					<li class="dropdown">
					          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"  style="color: #808080;">LOGIN <span class="caret"></span></a>
					          <ul class="dropdown-menu">
					            <li class="active"><a href="<?php echo base_url()."index.php/Welcome/Login_member";?>" style="color: #000000;">LOGIN MEMBER</a> </li>
					            <li class="active"><a href="<?php echo base_url()."index.php/Login";?>" style="color: #000000;">LOGIN ADMIN</a> </li>
					          </ul>
					        </li>
					      </ul>

					</ul>
				</div>
			</nav>