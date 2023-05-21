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
                $id_barang = $_GET['kodebrg'];
                $hasil = $conn->query("SELECT * FROM barang WHERE id_barang = '$id_barang'");
                $row = mysqli_fetch_row($hasil);
                do {
                    list($id_barang, $nama_laptop, $processor, $ram, $igp, $gpu, $monitor, $kapasitas_baterai, $daya_charger, $storage, $bobot, $bluetooth, $OS, $IO, $harga, $stok) = $row;
                ?>

                <tr>
                    <td>KODE BARANG<td><input name="id_barang" size="40" value="<?php echo $id_barang ?>" readonly></td>
                </tr>

                <tr>
                    <td>NAMA BARANG<td><input name="nama_laptop" size="40" value="<?php echo $nama_laptop ?>"></td>
                </tr>

                <tr>
                    <td>HARGA<td><input name="harga" size="40" value="<?php echo $harga ?>"></td>
                </tr>

                <tr>
                    <td>STOK<td><input name="stok" size="40" value="<?php echo $stok ?>"></td>
                </tr>

                <tr>
                    <td>CPU<td><input name="processor" size="40" value="<?php echo $processor ?>"> </td>
                </tr>
                
                <tr>
                    <td>RAM<td><input name="ram" size="40" value="<?php echo $ram ?>"> </td>
                </tr>
                
                <tr>
                    <td>IGP<td><input name="igp" size="40" value="<?php echo $igp ?>"> </td>
                </tr>

                <tr>
                    <td>gpu<td><input name="gpu" size="40" value="<?php echo $igp ?>"> </td>
                </tr>

                <tr>
                    <td>Monitor<td><input name="monitor" size="40" value="<?php echo $monitor ?>"></td>
                </tr>

                <tr>
                    <td>Kapasitas Baterai<td><input name="kapasitas_barterai" size="40" value="<?php echo $kapasitas_baterai ?>"></td>
                </tr>

                <tr>
                    <td>Daya Charger<td><input name="daya_charger" size="40" value="<?php echo $daya_charger ?>"></td>
                </tr>

                <tr>
                    <td>Storage<td><input name="storage" size="40" value="<?php echo $storage ?>"></td>
                </tr>

                <tr>
                    <td>Berat<td><input name="bobot" size="40" value="<?php echo $bobot ?>"></td>
                </tr>

                <tr>
                    <td>Bluetooth<td><input name="bluetooth" size="40" value="<?php echo $bluetooth ?>"></td>
                </tr>

                <tr>
                    <td>OS<td><input name="OS" size="40" value="<?php echo $OS ?>"></td>
                </tr>

                <tr>
                    <td>IO<td><input name="IO" size="40" value="<?php echo $IO ?>"></td>
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