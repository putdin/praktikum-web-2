<!DOCTYPE html>
<html>

<head>
  <title>CRUD dengan CI</title>
</head>

<body>
  <center>
    <h1>Membuat CRUD dengan CodeIgniter</h1>
  </center>
  <center><?php echo anchor(base_url() . 'index.php/crud/tambah', 'Tambah Data'); ?></center>
  <table style="margin: 20px auto;" border="1">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Pekerjaan</th>
      <th>Action</th>
    </tr>
    <?php
    $no = 1;
    foreach ($user as $u) {
    ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $u->nama ?></td>
        <td><?php echo $u->alamat ?></td>
        <td><?php echo $u->pekerjaan ?></td>
        <td>
          <?php echo anchor(base_url() . 'index.php/crud/edit/' . $u->id, 'Edit'); ?>
          <?php echo anchor(base_url() . 'index.php/crud/hapus/' . $u->id, 'Hapus'); ?>
        </td>
      </tr>
    <?php } ?>
  </table>
</body>

</html>