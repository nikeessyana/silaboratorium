<?php
 include('db.php');
  $select=mysql_query("SELECT * FROM pengguna order by id_pengguna desc");
  $i=1;
  while($userrow=mysql_fetch_array($select))
  
  {
  $id_pengguna=$userrow['id_pengguna'];
  $alamat=$userrow['alamat'];
  $no_telp=$userrow['no_telp'];
  $status_pengguna=$userrow['status_pengguna'];
  $nama_pengguna=$userrow['nama_pengguna'];
  $password=$userrow['password'];
 
?>

<div class="display">
  
    <a href="delete.php?id_pengguna=<?php echo $id_pengguna; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">
    		<span class="delete" title="Delete"> DELL </span></a>
<a href="edit.php?id_pengguna=<?php echo $id_pengguna; ?>"><span class="edit" title="Edit"> EDITE </span></a>
			
  <p> id : <span><?php echo $id_pengguna; ?></span>
  </p>
  
  <p> alamat : <span><?php echo $alamat; ?></span>
    
  </p>
  
  <p> no_telp : <span><?php echo $no_telp; ?></span>
  </p>
    
  <p> status : <span><?php echo $status_pengguna; ?></span>
  </p>
  
  <p> nama_pengguna : <span><?php echo $nama_pengguna; ?></span>
  </p>
  
  <p> password : <span><?php echo $password; ?></span>
  </p>
  <br /><p> ___________________________________________________________________________________________________________________________________________________________________
  </p>
  <br />
  <br />
  <br />
 </div>
<?php } ?>
