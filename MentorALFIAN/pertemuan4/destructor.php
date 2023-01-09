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


    public function __destruct()
    {
        echo "<br>";
        echo "Ini destruct";
    }

    public function getLabel()
    {
        return "$this->judul by $this->penulis ($this->harga)";
    }
}

$produk1 = new Produk("Hold On It's Hurt", "lalalafindyou", "Akad Publisher", "Rp. 99.000-,");

$produk2 = new Produk("Seasons of Blossom", "NEMONE", "Webtoon", "Free");

echo "Alternative Universe: ";
echo $produk1->getLabel();
echo "<br>";
echo "Komik: " ;
echo $produk2->getLabel();