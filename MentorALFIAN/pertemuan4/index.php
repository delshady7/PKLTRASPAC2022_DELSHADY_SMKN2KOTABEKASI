<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
    <input type="date" name="tanggal">
    <input type="file" name="file"> 
    <input type="submit" name="kirim" value="Upload">
    </form>
</body>
</html>
<?php 

class uploadFile
{
    public  $nama,
            $tmp,
            $lokasi,
            $kirim,
            $tanggal;

    public function __construct($nama, $tmp, $lokasi, $kirim, $tanggal){
         $this->nama = $nama;
         $this->tmp = $tmp;
         $this->lokasi = $lokasi;
         $this->kirim = $kirim;
         $this->tanggal = $tanggal;

         if ($kirim) {
                if (move_uploaded_file($tmp, $lokasi.$nama)){
                    echo "File berhasil diupload"; 
                    echo "<br> File diupload pada tanggal:" . $tanggal;
                }else {
                    echo "File gagal diupload, periksa file terlebih dahulu.";
                }
            }
    }
}
$file = new uploadFile($_FILES['file']['name']??'',
                       $_FILES['file']['tmp_name']??'',
                       "lokasi/",
                       $_POST['kirim']??'',
                       $_POST['tanggal']??'');
?>
