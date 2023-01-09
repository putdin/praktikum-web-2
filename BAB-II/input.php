<?php
$user = $_POST['username'];
$pass = $_POST['pass'];

if ($user == 'aku' and $pass == 'kamu') {
  echo "login berhasil";
} else {
  echo "gagal login";
}
?>
<meta name="viewport" content="width=devoce-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src="bootstrap.min.css"></script>

<div class="container">
  <div class="jumbotron">
    <h1 align="center">Login Form</h1>
    <form class="form-horizontal" method="post">
      <div class="from-group">
        <label class="com-md-4 control-label" for="username">Username</label>
        <div class="col-md-3">
          <input id="pass" name="username" clas="form-control input-md" type="text" required>
        </div>
      </div>
      <div class="from-group">
        <label class="com-md-4 control-label" for="pass">Password</label>
        <div class="col-md-3">
          <input id="pass" name="pass" clas="form-control input-md" type="password">
        </div>
      </div>
      <div class="from-group">
        <label class="com-md-4 control-label" for="submit"></label>
        <div class="col-md-3">
          <button id="submit" name="submit" clas="btn btn-primary">Daftar</button>
        </div>
      </div>
    </form>
  </div>
</div>