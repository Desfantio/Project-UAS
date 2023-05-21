
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <center>
        <hr width=320>
        <table>
            <?php
            require("koneksi.php");
            $id_barang      = $_POST['id_barang'];
            $jumlah         = $_POST['jumlah'];
            $namapembeli    = $_POST['namapembeli'];
            $alamat         = $_POST['alamat'];
            $kota           = $_POST['kota'];
            $kodepos        = $_POST['kodepos'];
            $telp           = $_POST['telp'];
            $email          = $_POST['email'];
            if (($namapembeli == '') || ($alamat == '') || ($kota == '') || ($kodepos == '') || ($telp == '') || ($email == '')) {
                echo "<h1>Maaf ada data belum diisi<br><br> ";
                echo "<button onclick='goBack()'>Back</button>";
                exit;
            }
            echo "<tr><td width=150>Kode Barang<td>     $id_barang";
            echo "<tr><td>Jumlah Beli<td>               $jumlah";
            echo "<tr><td>Nama Pembeli<td>              $namapembeli";
            echo "<tr><td>Alamat<td>                    $alamat";
            echo "<tr><td>Kota<td>                      $kota";
            echo "<tr><td>Kode Pos<td>                  $kodepos";
            echo "<tr><td>Telp<td>                      $telp";
            echo "<tr><td>E-Mail<td>                    $email";
            echo "</table>";
            echo "<hr width=320>";
            $sql = "INSERT INTO penjualan VALUES (null,'$id_barang','$jumlah','$namapembeli','$alamat','$kota','$kodepos','$telp','$email') ";
            $updatestok="update barang set stok = stok-'$jumlah' where id_barang='$id_barang'";
            $hasil = mysqli_query($conn,$sql);
            $savestok=mysqli_query($conn,$updatestok);
            ?>
        </table>
        <h1>Data Penjualan telah di Simpan</h1>
        <hr>
        <br>
        <a class="w3-btn w3-round-xxlarge w3-red w3-margin-bottom" href="index.php">Kembali ke Toko</a>
    </center>