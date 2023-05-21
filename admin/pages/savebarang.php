
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <center>
        <div class="w3-container">
            <div class="w3-panel w3-round-xxlarge w3-blue">
                <h3>SAVE DATA BARANG</h3>
            </div>
        </div>
        <hr width=320>
        <table>
            <?php
            require("../pages/koneksi.php");
            $id_barang = $_POST['id_barang'];
            $nama_laptop = $_POST['nama_laptop'];
            $harga = $_POST['harga'];
            $stok = $_POST['stok'];
            if (($id_barang == '') || ($nama_laptop == '') || ($harga == '') || ($stok == '')) {
                echo '<div class="w3-panel w3-red">
                        <h3>Info!</h3>
                        <p>Data Tidak Boleh Kosong </p>
                        <button onclick="goBack()" class="w3-btn w3-round-xxlarge w3-black w3-margin-bottom">Kembali</button>
                    </div>';
                exit;
            }
            echo "<tr><td width=150>Kode Barang<td>$id_barang";
            echo "<tr><td>Nama Barang<td>$nama_laptop";
            echo "<tr><td>Harga<td>$harga";
            echo "<tr><td>Stok<td>$stok";
            echo "</table>";
            echo "<hr width=320>";
            $conn->query("INSERT INTO barang (id_barang, nama_laptop, harga, stok) VALUES ('$id_barang','$nama_laptop','$harga','$stok')");
            ?>
        </table>
        <div class="w3-container w3-green">
            <p>Data Telah di Tambahkan</p>
            <a href="index.php?p=inputbarang" class="w3-btn w3-round-xxlarge w3-black w3-margin-bottom">Kembali</a>
        </div>
    </center>
    <div class="w3-bar w3-blue w3-center w3-display-bottommiddle">

    </div>