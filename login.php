<form class="form-horizontal" action="proses.php" method="post">
  <div class="form-group">
    
    <div class="col-sm-10" style="padding-left:70px; padding-top:20px;">
      <input type="text" class="form-control" name="username" id="username" placeholder="Username" >
    </div>
  </div>
  <div class="form-group">
    
    <div class="col-sm-10" style="padding-left:70px;">
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login" value="login" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>