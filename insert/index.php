<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert form</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>

<body>
<div class="display">
<form action="insert.php" method="post" name="insertform">

<div>
<p>
  <span align="left">
  <label for="id_pengguna" id="preinput"> ID PENGGUNA : </label>
  <input type="text" name="id_pengguna" required placeholder="Enter your ID" id="inputid"/>
</p>

<p><span align="left">
  <label  for="alamat" id="preinput"> alamat : </label>
  <input type="text" name="alamat" required placeholder="Enter your alamat" id="inputid" />
</p>


<p><span align="left">
  <label  for="no_telp" id="preinput"> TELP: </label>
  <input type="text" name="no_telp" required placeholder="Enter your TELP" id="inputid" />
</p>

<p><span align="left">
  <label  for="status_pengguna" id="preinput"> STATUS: </label>
  <input type="text" name="status_pengguna" required placeholder="Enter your status" id="inputid" />
</p>

<p><span align="left">
  <label  for="nama_pengguna" id="preinput"> NAMA PENGGUNA: </label>
  <input type="text" name="nama_pengguna" required placeholder="Enter your nama" id="inputid" />
</p>


<p><span align="left">
  <label for="password" id="preinput"> password: </label>
  <input type="text" name="password" required placeholder="Enter your password" id="inputid" />
</p>

<p><span align="left">
  <label for="password" id="preinput"> LEVEL : </label>
  <input type="text" name="level" required placeholder="Enter your password" id="inputid" />
</p>

<p><span align="left">
  <input type="submit" name="send" value=
  "Submit" id="inputid"  />
 </p>
  <a href="/lab/home - admin.php">Beranda</a>
  
</div>


</form>
</div>
<?php include('view.php'); ?>
</body>
</html>