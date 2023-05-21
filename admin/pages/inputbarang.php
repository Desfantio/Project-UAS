    
    <center>
        <div class="w3-container">
            <div class="w3-panel w3-round-xxlarge w3-blue">
                <h3>MEMASUKAN DATA BARANG</h3>
            </div>
        </div>

        <?php

        include ("../connect/koneksi.php");
        $query = mysqli_query($conn, "SELECT max(id_barang) as kodeTerbesar FROM barang");
	    $data = mysqli_fetch_array($query);
        $id_barang = $data['kodeTerbesar'];
        
        $urutan = (int) substr($id_barang, 3, 3);
        $urutan++;

        $huruf = "BR";
        $id_barang = $huruf . sprintf("%03s", $urutan);
        
        ?>

    <!-- list($id_barang, $nama_laptop, $processor, $ram, $igp, $gpu, $monitor, $kapasitas_baterai, $daya_charger, $storage, $bobot, $bluetooth, $OS, $IO, $harga, $stok) = $row; -->

        <form action="index.php?p=savebarang" method="POST">
        <hr>
            <table>
                <tr>
                    <td>KODE BARANG<td><input type="text" name="id_barang" required="required" size="40" value="<?php echo $id_barang ?>" readonly></td>
                </tr>
                <tr>
                    <td>NAMA BARANG<td><input type="text" name="nama_laptop" required="required" size="40"></td>
                </tr>
                <tr>
                    <td>HARGA<td><input  type="number" name="harga" required="required" size="40"></td>
                </tr>
                <tr>
                    <td>STOK<td><input type="number" name="stok" required="required" size="40"></td>
                </tr>
                <tr>
                    <td>Processor<td><input type="text" name="processor" required="required" size="40"></td>
                </tr>
                <tr>
                    <td>RAM<td><input type="text" name="ram" required="required" size="40"></td>
                </tr>
                <tr>
                    <td>IGP<td><input type="text" name="igp" required="required" size="40"></td>
                </tr>
                <tr>
                    <td>GPU<td><input type="text" name="gpu" required="required" size="40"></td>
                </tr>
                <tr>
                    <td>Monitor<td><input type="text" name="monitor" required="required" size="40"></td>
                </tr>
                <tr>
                    <td>Kapasitas Baterai<td><input type="number" name="kapasitas_baterai" required="required" size="40"></td>
                </tr>
                <tr>
                    <td>Daya Charger<td><input type="number" name="daya_charger" required="required" size="40"></td>
                </tr>
                <tr>
                    <td>Storage<td><input type="text" name="storage" required="required" size="40"></td>
                </tr>
                <tr>
                    <td>Bobot<td><input type="text" name="bobot" required="required" size="40"></td>
                </tr>
                <tr>
                    <td>Bluetooth<td><input type="text" name="bluetooth" required="required" size="40"></td>
                </tr>
                <tr>
                    <td>OS<td><input type="text" name="os" required="required" size="40"></td>
                </tr>
                <tr>
                    <td>IO<td><input type="text" name="IO" required="required" size="40"></td>
                </tr>
            </table>
        <hr>

        <div class="w3-container">
            <p><button class="w3-button w3-blue w3-round-xxlarge">SAVE BARANG</button></p>
        </div>

        <div class="w3-container w3-blue">
            <p>Note : Masukan data dengan benar, kemudian Click Tombol Save</p>
        </div>
    </center>
    <div class="w3-bar w3-blue w3-center w3-display-bottommiddle">

    </div>