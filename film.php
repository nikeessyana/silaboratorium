
<!-- Example row of columns -->
      <div class="row">
	   <?php 
		
		$mysqli = new mysqli("localhost", "root", "", "db_lab");
		$result = mysqli_query($mysqli,"select * from booking_lab");
		while ($row = mysqli_fetch_array($result)) {	?>	
			<div class="col-md-3">
			   <b>pengguna : </b><?php echo $row['username'];?><br>
			  </div>
			 
			<div class="col-md-3">
			  <b>ruang : </b><?php echo $row['ruang'];?><br>
			  <b>lab : </b><?php echo $row['nama_lab'];?><br>
			  </div>
			 
			<div class="col-md-3">
			  <b>waktu masuk : </b><?php echo $row['waktu_masuk'];?> <br>
			  </div>
			 
			<div class="col-md-3">
			  <b>waktu keluar : </b><?php echo $row['waktu_keluar'];?><br><br>
			  </div>
			
		<?php } ?>
		
		
		
      </div>