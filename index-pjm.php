<!DOCTYPE>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert form</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>

<body>
<div class="display">
<form class="form-horizontal" action="peminjaman/insert.php" method="post" name="insertform">

<div class="form-group">

<p>
  <span align="left">
  <label for="id_pengguna" id="preinput" class="col-sm-2 control-label" > NIM  </label>
  
  <div class="col-sm-10">
  <input for="id_pengguna" name="id_pengguna" type="text" id="preinput" class="form-control" value=" <?php echo $_SESSION['idguest'];?> " >
  </div>
</p>
 </div>
 
<div class="form-group">
<p><span align="left">
  <label  for="nama_pengguna" id="preinput" class="col-sm-2 control-label"> ID LAB  </label>
  <div class="col-sm-10">
  <input class="form-control"  type="text" name="id_lab" required placeholder="Enter your id lab" id="inputid" /></div>
</p></div>

<div class="form-group">
<p><span align="left">
  <label for="waktu_masuk" id="preinput" class="col-sm-2 control-label"> WAKTU MASUK </label>
  <div class="col-sm-10">
  <input class="form-control" type="text" name="waktu_masuk"  required placeholder="Enter your waktu masuk" id="inputid" /></div>
</p></div>

<div class="form-group">
<p><span align="left">
  <label for="waktu_keluar" id="preinput" class="col-sm-2 control-label"> WAKTU KELUAR </label>
  <div class="col-sm-10">
  <input class="form-control"  type="text" name="waktu_keluar" required placeholder="Enter your keluar" id="inputid" /></div>
</p></div>



<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" name="send" value=
  "Submit" id="inputid">pinjam</button>
		</div>
	  </div> 


</form>
</div>
</body>
</html>