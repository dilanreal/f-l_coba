<?php
$konek = mysqli_connect("localhost", "id12886216_datapkl", "admin12345", "id12886216_pkl");
$query = "SELECT * from produk ";
$result = mysqli_query($konek,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(
    "id_produk" => $row["id_produk"],
    "nama_produk" => $row["nama_produk"], 
    "produsen" => $row["produsen"],
    "harga" => $row["harga"],
    "kategori" => $row["kategori"],
    "jenis" => $row["jenis"]);
    array_push($arr, $temp);
}
$data = json_encode($arr);
echo "{\"MENAMPILKAN DATA PRODUK\":" . $data . "}";
?>
