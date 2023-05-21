
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <center>
        <div class="w3-container">
            <div class="w3-panel w3-round-xxlarge w3-blue">
                <h3>EDIT DATA BARANG</h3>
            </div>
        </div>
        <hr width=320>
        <form action="index.php?p=saveeditbarang" method="POST">
            <table>
                <?php
                require("../pages/koneksi.php");
                $id_barang = $_POST['id_barang'];
                $hasil = $conn->query("SELECT * FROM barang WHERE id_barang = '$id_barang'");
                $row = mysqli_fetch_row($hasil);
                do {
                    list($id_barang, $nama_laptop, $harga, $stok) = $row;
                ?>
                <tr>
                    <td>KODE BARANG<td><input name="id_barang" size="10" value="<?php echo $id_barang ?>" readonly></td>
                </tr>
                <tr>
                    <td>NAMA BARANG<td><input name="nama_laptop" size="30" value="<?php echo $nama_laptop ?>"></td>
                </tr>
                <tr>
                    <td>HARGA<td><input name="harga" size="10" value="<?php echo $harga ?>"></td>
                </tr>
                <tr>
                    <td>STOK<td><input name="stok" size="5" value="<?php echo $stok ?>"></td>
                </tr>
                <?php } while ($row = mysqli_fetch_row($hasil)); ?>
            </table>
            <hr width=320>

            <div class="w3-container w3-margin-bottom">
                <p><button class="w3-button w3-blue w3-round-xxlarge">SAVE EDIT</button></p>
            </div>
        </form>
    </center>
    <div class="w3-bar w3-blue w3-center w3-display-bottommiddle">

    </div>