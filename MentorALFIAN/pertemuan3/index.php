<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
    <input type="date" name="tanggal">
    <input type="file" name="file"> 
    <input type="submit" name="kirim" value="Upload">

    <p><?php echo upload(); ?></p>
    </form>
</body>
</html>
<?php 
function upload()
{
    $nama = $_FILES['file']['name'] ??'';
    $tmp = $_FILES['file']['tmp_name'] ??'';
    $lokasi = "lokasi/";
    $kirim = $_POST ['kirim']??'';
    $tanggal = $_POST['tanggal']??'';

    if ($kirim) {
        if (move_uploaded_file($tmp, $lokasi.$nama)){
            echo "File berhasil diupload"; 
            echo "<br> File diupload pada tanggal:" . $tanggal;
        }else {
            echo "File gagal diupload";
   }
}
        
}

?>
