<?php 

class Produk
{
    public  $judul, 
            $penulis,
            $penerbit,
            $harga,
            $halaman,
            $panel,
            $tipe;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0, $panel = 0, $tipe )
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->panel = $panel;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "$this->judul by $this->penulis";
    }

    public function getIngfo()
    {
        //Komik : Hold On It's Hurt by lalalafindyou | Published by Akad Publisher (Rp. Rp. 320.000-,) - 600 Halaman.
        $str = "{$this->tipe} : {$this->getLabel()} | Published by {$this->penerbit} ({$this->harga})";

        if ($this->tipe == "Alternative Universe"){
            $str .= " - {$this->halaman} Halaman.";
        }else if ($this->tipe == "E-komik") {
            $str .= " ~ {$this->panel} Panel.";
        }

        return $str;
    }
}

class Ingfo
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->getLabel()} | Published by {$produk->penerbit} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Hold On It's Hurt", "lalalafindyou", "Akad Publisher", "Rp. 320.000-,", 600, 0, "Alternative Universe");

$produk2 = new Produk("Seasons of Blossom", "NEMONE", "Webtoon", "Free", 0, 120, "E-komik");

echo $produk1->getIngfo();
echo "<br>";
echo $produk2->getIngfo();

// echo "Alternative Universe: ";
// echo $produk1->getLabel();
// echo "<br>";
// echo "Komik: " ;
// echo $produk2->getLabel();
// echo "<br>";
// $ingfoproduk = new Ingfo();
// echo $ingfoproduk->cetak($produk1);
