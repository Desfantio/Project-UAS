    
    <div class="w3-container w3-margin-bottom">
        <div class="w3-panel w3-center w3-round-xxlarge w3-blue">
            <h3>MENAMPILKAN SELURUH ISI TABEL BARANG</h3>
        </div>

        <table class="w3-table-all">
        <thead>
            <tr class="w3-light-grey">
                <th>NO</th>
                <th>KODE BARANG</th>
                <th>NAMA BARANG</th>
                <th class="w3-center">HARGA</th>
                <th class="w3-center">STOCK</th>
                <th class="w3-center">ACTION</th>
            </tr>
        </thead>
            <?php 
            require("../pages/koneksi.php"); 
            $hasil = $conn->query("SELECT * FROM barang");
            if($hasil->num_rows == 0) {
                echo '<tr><td colspan="6" class="w3-center">Data Barang Kosong</td></tr>';
                exit;
            }
            $row = mysqli_fetch_row($hasil); 
            $n = 1;
            do { 
                list($id_barang, $nama_laptop, $processor, $ram, $igp, $gpu, $monitor, $kapasitas_baterai, $daya_charger, $storage, $bobot, $bluetooth, $OS, $IO, $harga, $stok) = $row; 
            ?>
            <tr>
                <td><?php echo $n ?></td>
                <td><?php echo $id_barang ?></td>
                <td><?php echo $nama_laptop ?></td>
                <td class="w3-center">Rp. <?php echo number_format($harga,2,",",".") ?></td>
                <td class="w3-center"><?php echo $stok ?></td>
                <td class="w3-center">
                    <a class="w3-btn w3-yellow" href="index.php?p=editbarang&kodebrg=<?php echo $id_barang ?>"> Edit </a>
                    <a class="w3-btn w3-red" href="index.php?p=delete_barang&kodebrg=<?php echo $id_barang ?>"> Delete </a>
                </td>
            </tr>
            <?php $n++; } while($row = mysqli_fetch_row($hasil)); ?>
        </table>
    </div>
    <div class="w3-bar w3-blue w3-center w3-display-bottommiddle">

    </div>