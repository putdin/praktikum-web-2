<!DOCTYPE html>
<html>

<head>
  <title>CRUD dengan CI</title>
</head>

<body>
  <center>
    <h1>Membuat CRUD dengan CodeIgniter</h1>
    <h3>Menambahkan data baru</h3>
  </center>
  <form action="<?php echo base_url() . 'index.php/crud/tambah_aksi'; ?>" method="post">
    <table style="margin: 20px auto;">
      <tr>
        <td>ID</td>
        <td><input type="text" name="id"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td><input type="text" name="pekerjaan"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="Tambah"></td>
      </tr>
    </table>
  </form>
</body>

</html>