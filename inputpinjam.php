<form class="form-horizontal" enctype="multipart/form-data" action="pinjam.php" method="post">
 
  <div>
	  
	  
	  <div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">NIM</label>
		<div class="col-sm-10">
		<input type="text" name="id_pengguna" type="text" id="preinput" class="form-control" value=" <?php echo $_SESSION['idguest'];?> " >
		  
		</div>
	  </div>
	  
	   
	  
	  <div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">ID DETAIL ASET</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="id_dtl_aset" id="inputPassword3" placeholder="Id Aset">
		</div>
	  </div>
	  
	  <div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">WAKTU PINJAM</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="waktu_pinjam" id="inputPassword3" placeholder="Waktu Pinjam">
		</div>
	  </div>
	  
	  <div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">WAKTU KEMBALI</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" name="waktu_kembali" id="inputPassword3" placeholder="Waktu Kembali">
		</div>
	  </div>
	  
	  
	  
	  	  
	  </div>
	  
	  <div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-default">pinjam</button>
		</div>
	  </div> 
  
  
</form>