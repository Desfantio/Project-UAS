
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <center>
        <div class="w3-container">
            <div class="w3-panel w3-round-xxlarge w3-blue">
                <h3>SAVE EDIT DATA BARANG</h3>
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
            echo "<tr><td width=150>Kode Barang<td>$id_barang";
            echo "<tr><td>Nama Barang<td>$nama_laptop";
            echo "<tr><td>Harga<td>$harga";
            echo "<tr><td>Stok<td>$stok";
            echo "</table>";
            echo "<hr width=320>";
            $conn->query("UPDATE barang SET nama_laptop = '$nama_laptop', harga = '$harga', stok = '$stok' WHERE id_barang = '$id_barang'");
            ?>
        </table>
        <div class="w3-container w3-green">
            <p>Data Barang Sudah Di Edit</p>
            <a href="index.php?p=selectbarang" class="w3-btn w3-round-xxlarge w3-black w3-margin-bottom">Kembali</a>
        </div>
    </center>
    <div class="w3-bar w3-blue w3-center w3-display-bottommiddle">

    </div>