<?php 
    $nama=$_POST['nama']??'';
    $usia=$_POST['usia']??'';
    $jam=$_POST['jam']??'';
    $datang=$_POST['datang']??'';

    if ($jam < '12:00') {
        if ($usia > 20) {
            $status = "$nama diizinkan masuk.";
        }else {
            $status = "$nama tidak diizinkan masuk.";
        }
    }else {
        if ($usia < 20 || $usia > 20) {
            $status = "$nama diizinkan masuk.";
        }else {
            $status = "$nama tidak diizinkan masuk.";
        }
    }
    if ($datang === 'Sendiri') {
        $ruang = "private";
    }else {
        if ($datang === 'Teman perempuan') {
            if ($usia < 20) {
                $status = "$nama tidak diizinkan masuk.";
            }
            $ruang = "Publik"; 
        }else {
            $ruang = "Publik & Private";
        }
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe</title>
</head>
<body>
    <form action="mangaCafe.php" method="post">
        Nama: <input type="text" name="nama">
        <br><br>
        Usia: <input type="number" name="usia">
        <br><br>
        Jam Datang: <input type="time" name="jam" id="">
        <br><br>
        Pasangan: <select name="datang" id="">
            <option value="Sendiri">Sendiri</option>
            <option value="Teman laki-laki">Teman laki-laki</option>
            <option value="Teman perempuan">Teman perempuan</option>
        </select>
        <br><br>
        <input type="submit" name="cek" value="Cek">
    </form>

    <?php 
    echo "<br>";
    echo "Nama: $nama";
    echo "<br>";
    echo "Usia: $usia";
    echo "<br>";
    echo "Jam datang: $jam";
    echo "<br>";
    echo "Status: $status";
    echo "<br>";
    echo "Ruang: $ruang";
    ?>

</body>
</html>

