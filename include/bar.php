<div class="login-bar">
<ul class="nav navbar-nav navbar-right">
			
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">selamat datang<span class="caret" ></span></a>
						<ul class="dropdown-menu" role="menu" style="height:277px; width:352px">
						
						<?php if(isset($session_nama)){?><li><a href="index.php?halaman=daftar">Hai,<?php echo $session_username;?></a></li><?php } ?>
						<?php include 'login.php';?>
						<?php if(isset($session_nama)){?><li><a href="index.php?halaman=keluar">Keluar</a></li><?php } ?>
						</ul>
				</li>
				</ul>
				
				</div>
				