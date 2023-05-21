
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <center>
        <div class="w3-container">
            <div class="w3-panel w3-round-xxlarge w3-blue">
                <h3>HAPUS DATA BARANG</h3>
            </div>
        </div>
        <hr width=320>
        <form action="index.php?p=prosesdeletebarang" method="POST">
            <table>
                <?php
                require("../pages/koneksi.php");
                $id_barang = $_POST['id_barang'];
                $hasil = $conn->query("SELECT * FROM barang WHERE id_barang = '$id_barang'");
                $row = mysqli_fetch_row($hasil);
                do {
                    list($id_barang, $nama_laptop, $processor, $ram, $igp, $gpu, $monitor, $kapasitas_baterai, $daya_charger, $storage, $bobot, $bluetooth, $OS, $IO, $harga, $stok) = $row;
                ?>
                <tr>
                    <td>KODE BARANG<td><input name="id_barang" size="40" value="<?php echo $id_barang ?>" readonly></td>
                </tr>
                <tr>
                    <td>NAMA BARANG<td><input name="nama_laptop" size="40" value="<?php echo $nama_laptop ?>" readonly></td>
                </tr>
                <tr>
                    <td>HARGA<td><input name="harga" size="40" value="<?php echo $harga ?>" readonly></td>
                </tr>
                <tr>
                    <td>STOK<td><input name="stok" size="40" value="<?php echo $stok ?>" readonly></td>
                </tr>
                <?php } while ($row = mysqli_fetch_row($hasil)); ?>
            </table>
            <hr width=320>

            <div class="w3-container w3-margin-bottom">
                <p><button class="w3-button w3-blue w3-round-xxlarge">PROSES HAPUS</button></p>
            </div>
        </form>
    </center>
    <div class="w3-bar w3-blue w3-center w3-display-bottommiddle">

    </div>