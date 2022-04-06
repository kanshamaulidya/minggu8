<!DOCTYPE HTML>
<html>
    <head>
        <style>
            .error {color: #FF0000;} 
        </style>
    </head>
    <body>
    <h1 align="center"> BAKE HOUSE</h1>
    <h3>Hitung Transaksi<h3>
        <?php
        //ambil nilai variabel error
        if (isset($_GET['error'])){
            $error = $_GET['error'];
        } else {
            $error = " ";
        }
        //siapkan pesan kesalahan
        $pesan = " ";
        if($error == "variabel_belum_diset"){
            $pesan = "Anda harus mengakses halaman ini dari trans.php";
        } else if ($error == "nama_kosong") {
            $pesan = "Nama harus diisi";
        } else if ($error == "email_kosong"){
            $pesan = "Email harus diisi";
        }
        //siapkan isian form jika terjadi kesalahan
        if(isset($_GET['nama']) AND isset($_GET['status']) AND isset($_GET['menu']) AND isset($_GET['jumlah'])){
            $nama = $_GET['nama'];
            $status = $_GET['status'];
            $menu = $_GET['menu'];
            $jumlah = $_GET['jumlah'];
        } else {
            $nama = " ";
            $status = " ";
            $menu = " ";
            $jumlah = " ";
        }
        ?>
        <span class = "error"><?php echo $pesan;?></span>
            <form method = "get" action = "prosesTrans.php">
                 Nama : 
                    <input type = "text" name = "nama" value = "<?php echo $nama;?>"><br><br>
            
                Status :
                    <select name="status" size="1" value="<?php echo $status;?>">
                            <option value="Member"> Member </option>
                            <option value="Bukan Member">Bukan Member</option>
                    </select><br><br>
                
                Pilihan Cake :
                    <select name="menu" size="1">
                        <option $harga1 value="Tipe Satu"> Tipe 1 </option>
                        <option $harga2 value="Tipe Dua">Tipe 2</option>
                        <option $harga3 value="Tipe Tiga"> Tipe 3</option>
                    </select> <br><br>

                Jumlah :
                <input type = "text" name = "jumlah" value = "<?php echo $jumlah;?>"><br><br>

                    <td><input type = "submit" name = "kirim" value = "Kirim"></td>
                </tr>
            </form>
        </table>
        </form>
    </body>
</html>