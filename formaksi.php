<?php
    $Username = $_GET['username'];
    $Password = $_GET['password'];
    $Email = $_GET['email'];
    $Gender = $_GET['gender'];
    $Gr = $_GET['sm']; //harus dibenarkan, dicari woi
    $Gx=$_GET['ht'];
    $Agama = $_GET['agama'];
    $Alamat = $_GET['alamat'];
// echo $Username;
// echo $Password;
// echo $Email;
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    Nama : <?php echo $Username; ?> <br>
    Password : <?php echo $Password; ?> <br>
    Email : <?php echo $Email; ?> <br>
    gender : <?php echo $Gender; ?> <br>
    group : <?php echo $Gr.$Gx; ?> <br>
    agama : <?php echo $Agama; ?> <br>
    alamat : <?php echo $Alamat; ?> <br>
<br>
<a href="form.html">kembali</a>
</body>
</html>