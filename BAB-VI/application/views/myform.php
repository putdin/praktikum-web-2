<!DOCTYPE html>
<html>

<head>
  <title>My Form</title>
</head>

<body>
  <?php echo validation_errors(); ?>
  <?php echo form_open('form'); ?>

  <h3>Nim</h3>
  <input type="nim" name="nim" value="" size="50">

  <h3>Nama</h3>
  <input type="text" name="nama" value="" size="50">

  <h3>Umur</h3>
  <input type="umur" name="umur" value="" size="50">

  <!-- <h3>Password</h3>
  <input type="text" name="password" value="" size="50">
  <h3>Password Confirm</h3>
  <input type="text" name="passwordconf" value="" size="50">

  <h3>Email</h3>
  <input type="text" name="email" value="" size="50"> -->

  <div><input type="submit" name="submit" value="submit"></div>
  <form>
</body>

</html>