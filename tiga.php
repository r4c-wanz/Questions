<?php

$barang = "99.900";
$hari = 10%
$diskon = 5%
$produk = 55;
$hasil1 = ($diskon/100)*$produk*$barang;
$hasil2 = ($hari/100);
$jumlah_barang = $_POST['value'];

if (empty($_POST['value'])) {
    echo '0';
}

echo "
harga barang : $barang <br/>
diskon jika membeli lebih dari 50 barang : $diskon <br/>
diskon jika membeli pada hari senin/kamis : $hari <br/>
";

if ($barang >=50 AND $diskon = $hasil1) {
    echo "maka total belanjaan ($hasil1)<br/>";
}
else if ($hari AND $barang) {
    echo "Jika anda membeli pada hari senin/kamis makan akan mendapatkan diskon 10% <br/>";
}
else {
    echo "kamu tidak mendapatkan diskon";
}

?>
<form method="post" action="">
    <input type="text" name="value" placeholder="Jumlah barang yang dibeli">
    <input type="submit">
</form>