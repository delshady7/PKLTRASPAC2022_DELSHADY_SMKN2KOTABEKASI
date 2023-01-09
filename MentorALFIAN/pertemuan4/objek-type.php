<?php 

class Produk
{
    public  $judul, 
            $penulis,
            $penerbit,
            $harga;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 )
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->judul by $this->penulis";
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


$produk1 = new Produk("Hold On It's Hurt", "lalalafindyou", "Akad Publisher", "Rp. 320.000-,");

$produk2 = new Produk("Seasons of Blossom", "NEMONE", "Webtoon", "Free");

echo "Alternative Universe: ";
echo $produk1->getLabel();
echo "<br>";
echo "Komik: " ;
echo $produk2->getLabel();
echo "<br>";
$ingfoproduk = new Ingfo();
echo $ingfoproduk->cetak($produk1);
