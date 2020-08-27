<?php
class produk{
  public $jenisBarang="jenisBarang", 
         $merk="Merk Barang",
         $model="Model barang",
         $proci="Prosessor {optional}",
         $ram="Kapasitas ram {optional}",
         $storage="Kapasitas Penyimpanan {optional}", 
         $gpu="GPU/VGA {optional}",
         $garansi="garansi barang",
         $harga="harga barang";
            // membuat method
            public function printProduk1(){
                return "❯ $this->jenisBarang | $this->merk | $this->model | $this->proci | $this->ram | $this->storage | $this->gpu | $this->garansi | $this->harga | ";
            }
            public function printProduk2(){
                return "❯ $this->jenisBarang | $this->merk | $this->model | $this->proci | $this->ram | $this->storage | $this->gpu | $this->garansi | $this->harga | ";
            }
            public function printProduk3(){
                return "❯ $this->jenisBarang | $this->merk | $this->model | $this->proci | $this->ram | $this->storage | $this->gpu | $this->garansi | $this->harga | ";
            }
}
$produk1 = new produk();

    $produk1->jenisBarang="Laptop Gaming";
    $produk1->merk="Lenovo";
    $produk1->model="Ideapad 3i";
    $produk1->proci="Intel core I7-7600U";
    $produk1->ram="16 GB";
    $produk1->storage="SSD 512GB";
    $produk1->gpu="Nvidia GTX 1650 4GB GDDR6";
    $produk1->garansi="2 Years Premium Care + 1 Y ADP";
    $produk1->harga="Rp 16.999.000";

$produk2 = new produk();

    $produk2->jenisBarang="Laptop Bussiness";
    $produk2->merk="Lenovo";
    $produk2->model="ThinkPad X1 Carbon";
    $produk2->proci="Intel core I7-7600U";
    $produk2->ram="16 GB";
    $produk2->storage="SSD 1TB PCIE";
    $produk2->gpu="Intel HD Graphics 620";
    $produk2->garansi="2 Years Premium Care + 1 Y ADP";
    $produk2->harga="Rp 23.999.000";

$produk3 = new produk();
    $produk3->jenisBarang="Laptop Editing";
    $produk3->merk="Asus";
    $produk3->model="ProArt StudioBook Pro 17";
    $produk3->proci="Intel Xeon E-2276M";
    $produk3->ram="32 GB";
    $produk3->storage="SSD 1TB PCIE";
    $produk3->gpu="Nvidia Quadro RTX 3000 with Max-Q";
    $produk3->garansi="2 Years Local Official Distributor Warranty";
    $produk3->harga="Rp 55.000.000";

echo "List Produk Shift Komputer";
echo "<br>";
echo $produk1->printProduk1();
echo "<br>";
echo $produk2->printProduk2();
echo "<br>";
echo $produk3->printProduk3();

?>
