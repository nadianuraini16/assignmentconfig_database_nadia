<?php
require "config.php";

$siswa = query('SELECT * FROM siswa');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data siswa</title>
</head>
<body>
     <h3> DATA SISWA </h3>

  <table border="1">
    <thead>
        <th>No</th>
        <th>id siswa</th>
        <th>id user</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <?php $i = 1;?>
        <?php foreach ($siswa as $data) :?>
    </thead>

<tbody>
    <tr>
        <td><?= $i;?></td>
        <td><?php echo $data ['id_siswa'];?></td>
        <td><?php echo $data ['id_user'];?></td>
        <td><?php echo $data ['nama'];?></td>
        <td><?php echo $data ['jurusan'];?></td>
</tr>
<?php $i++?>
<?php endforeach;?>
</tbody>

</table>
</body>
</html>