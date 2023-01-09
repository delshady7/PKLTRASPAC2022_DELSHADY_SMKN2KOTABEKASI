<?php 

class Produk
{
    public  $judul = "judul", 
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel()
    {
        return "$this->judul by $this->penulis";
    }
}

$produk1 = new Produk();
$produk1->judul = "Hold On It's Hurt";
$produk1->penulis = "lalalafindyou";
$produk1->penerbit = "Akad publisher";
$produk1->harga = "99000";

$produk2 = new Produk();
$produk2->judul = "Seasons of Blossom";
$produk2->penulis = "NEMONE";
$produk2->penerbit = "Webtoon";
$produk2->harga = "Free";

echo "Alternative Universe: $produk1->judul by $produk1->penulis" ;
echo "<br>";
echo "Price: Rp. $produk1->harga";
echo "<br>";
echo $produk1->getLabel();
echo "<br>";
echo "<br>";
echo "Komik: $produk2->judul by $produk2->penulis" ;
echo "<br>";
echo "Price: " . $produk2->harga ;
echo "<br>";
echo $produk2->getLabel();