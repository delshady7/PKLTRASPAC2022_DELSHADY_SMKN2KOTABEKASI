<?php
@$nilai = $_POST['nilai'];
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <head>
        <title>Pengecekkan Nilai</title>
    </head>
    <body>
        <form method="POST"
  
      <td><strong>Masukkan Nilai</strong></td>
      <td><input name="nilai" type="text" value ="<?php echo $nilai1; ?>"/></br></td> 
      <td><center> <input type="submit" name="submit" value="SUBMIT"/><br/></td></center>
            <td><center><?php
            if ($nilai == "") {
                echo "";
            } else if ($nilai >= 0 && $nilai <= 30) {
                echo 'Nilai : ' . $nilai . '<br> Kurang. ';
            } else if ($nilai >= 31 && $nilai <= 50) {
                echo 'Nilai : ' . $nilai . ' <br> Lumayan. ';
            } else if ($nilai >= 51 && $nilai <= 75) {
                echo 'Nilai : ' . $nilai1 . ' <br> ya boleh lah. ';
            } else if ($nilai >= 76 && $nilai <= 100) {
                echo 'Nilai : ' . $nilai . ' <br> mantapp. ';
            } 
   
   else{
                echo 'Nilai : ' . $nilai . ' diluar nalar coy.';
            }
          ?> </td></center> 
        </form>
    </body>
</html>