<?php
echo "TOTAL TRANSAKSI <br><br>";
if (isset($_GET['nama']) AND isset ($_GET['jumlah'])){
    $nama = $_GET['nama'];
    $jumlah = $_GET['jumlah'];
    $status = $_GET['status'];
    $menu = $_GET['menu'];
    $isi_form = "$nama = $nama&jumlah = $jumlah $status = $status $menu = $menu";
} else {
    header("Location : trans.php?error = variabel_belum_diset");
} 

if(empty($nama)){
    header("Location: trans.php?error = nama_kosong".$isi_form);
} else if (empty($jumlah)){
    header("Location:trans.php?error=jumlah_kosong".$isi_form);
} else {
echo "Nama : $nama <br> Status : $status <br> Pilihan Cake : $menu <br> Jumlah: $jumlah";
}
?>