<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Sistem pengurut angka super sederhana</h1>
    <div>
        <button id="tambah">Tambah Kotak</button>
        <button id="kurang" >Kurangi Kotak</button>
    </div>
    <br>
    <div>
        <button id="tambahbox">Tambah Filter</button>
        <button id="kurangbox" >Kurangi Filter</button>
    </div>

    <form action="sistemurutangka.php" method="post">
            <table>               
                <tr>
                    <td id="kolom">
                        <input type="number" id="kolominput" name="inputangka[]">
                    </td>
                </tr>
                <tr>
                    <td>
                    <select name="urutan" id="pilihan">
                        <option value="kecil-besar">Kecil-Besar</option>
                        <option value="besar-kecil">Besar-Kecil</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <tr>
                        <td id="box">
                            <input type="checkbox" name="filterbox" id="filterbox">
                            <label for="ketbox" id="ket">Filter tampil hanya yang: </label>
                            <select name="filter" id="filter">
                                <option value="lebihkecil" name="lebihkecil"><</option>
                                <option value="lebihbesar" name="lebihbesar">></option>
                                <option value="lebihbesarsamadengan" name="lebihbesarsamadengan">>=</option>
                                <option value="lebihkecilsamadengan" name="lebihkecilsamadengan"><=</option>
                            </select> 
                            <input type="number" id="filterinput" name="filterinput[]">
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="kata" id="">Awali dengan kata:
                            <input type="text" id="textinput" name="textinput">
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="gabung" id="gabung">Gabungkan dengan pemisah:
                            <input type="text" name="gabunginput">
                            <br>
                        </td>
                    </tr>
                </tr>
                <tr>
                    <td>
                        <input type="submit" id="urutkan" name="urutkan" value="Proses">
                    </td>
                </tr>
            </table>
    </form>

    <?php



if (isset($_POST['urutkan'])){


        $input = $_POST['inputangka']??'';
        $urut = $_POST['urutan']??'';
        $filterbox = $_POST['filterbox']??'';
        $filter = $_POST['filter']??'';
        $filterinput = $_POST['filterinput']??'';
        $kata = $_POST['kata']??'';
        $text =$_POST['textinput']??'';
        $gabung = $_POST['gabung']??'';
        $pisah = $_POST['gabunginput']??'';

        // if ($filterbox) {
            //     // echo $inputangka ;
            //     foreach ($filterinput as $angka) {
            //         echo  " ";
            //     }

            //     if ($filter === "lebihkecil") {
            //         echo $hasil1 < $angka;
            //     }else{
            //         echo "lebih besar";
            //     }
            // }else {
            //     echo "kosong";
            // }

    if ($urut === "kecil-besar") {
            sort($input);
        }else{
            rsort($input);
        // }foreach ($input as $hasil1) {
        //         echo "$hasil1 </br>";
        }
    if ($filterbox){
        echo "ini if benar ";
        foreach ($filterinput as $fi){

            echo $fi;
        }

            if ($filter === "lebihbesar" ){
                echo "pilih lebih besar";
            }else{
                echo"pilih lebih kecil";
            }
        }else{
            echo "  ";
        }
    
    echo"<br>";

    if($kata){
        
        $awali = $text;        
    }else{
        echo"tes";
    }
    echo"<br>";

    if($gabung){
        foreach ($input as $i){
            $baru = $text. $i.$pisah ;
           echo $baru;
        }
    }else{
        echo"gabung";
    }
    
    echo"<br>";

      }
      

      
?>

<script>
        var tambahkotak = document.getElementById("tambah");
        tambahkotak.addEventListener("click", tambah);

         function tambah(){           
            var kolominput = document.createElement('input');
            kolominput.setAttribute("type", "number");
            kolominput.setAttribute("name", "inputangka[]");

            kolom.appendChild(kolominput);
        }

        var kurangikotak = document.getElementById("kurang");
        kurangikotak.addEventListener("click", kurang)
       
        function kurang(){
            var kolom= document.getElementById('kolom');
            kolom.removeChild(kolom.lastChild);
        }

        var tambahbox = document.getElementById("tambahbox");
        tambahbox.addEventListener("click", boxbaru);

        function boxbaru() {
            //checkbox
            var boxfilter = document.getElementById("box");
            var filterbox = document.createElement('input');
            var text = document.createTextNode('Filter tampil hanya yang: ');
            filterbox.setAttribute("type", "checkbox");
            filterbox.setAttribute("name", "filter");

            
            
            //label
            var keterangan = document.createElement('label');
            keterangan.setAttribute("for", "ketbox");
            keterangan.setAttribute("id", "ket");

            //select
            var select = document.getElementById('filter');
            var filter = document.createElement('select');
            //option
            var opsi1 = document.createElement('option');
            var opsi2 = document.createElement('option');

            //filerinput
            var filterinput = document.createElement('input');
            filterinput.setAttribute("type", "number");
            filterinput.setAttribute("name", "filterinput[]");

            
            box.appendChild(filterbox);
            box.appendChild(keterangan);
            box.appendChild(text);
            // boxfilter.appendChild(boxfilter);
            box.appendChild(filter);
            box.appendChild(filterinput);
            
        }
        var kurangibox = document.getElementById("kurangbox");
        kurangibox.addEventListener("click", boxkurang);

        function boxkurang() {
            var box= document.getElementById('box');
            var ket = document.getElementById('ket');
            var filter = document.getElementById('filter');
            var filerinput = document.getElementById('filterinput[]');
            box.removeChild(box.lastChild);
            box.removeChild(ket.lastChild);
            box.removeChild(filter.lastChild);
            box.removeChild(filerinput.lastChild);
        }
</script>

</body>
</html>