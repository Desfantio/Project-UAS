    
    <div class="w3-container w3-margin-bottom">
        <div class="w3-panel w3-center w3-round-xxlarge w3-blue">
            <h3>MENAMPILKAN SELURUH DATA PENJUALAN</h3>
        </div>

        <table class="w3-table-all">
        <thead>
            <tr class="w3-light-grey">
                <th>NO</th>
                <th>ID</th>
                <th>KODE BARANG</th>
                <th>JUMLAH</th>
                <th>NAMA PEMBELI</th>
                <th>ALAMAT</th>
                <th>KOTA</th>
                <th>KODEPOS</th>
                <th>TELP</th>
                <th>EMAIL</th>
                <th class="w3-center">ACTION</th>
            </tr>
        </thead>
            <?php 
            require("../pages/koneksi.php"); 
            $hasil = $conn->query("SELECT * FROM penjualan");
            if($hasil->num_rows == 0) {
                echo '<tr><td colspan="11" class="w3-center">Data Penjualan Kosong</td></tr>';
                exit;
            }
            $row = mysqli_fetch_row($hasil); 
            $n = 1;
            do { 
                list($id, $id_barang, $jumlah, $namapembeli, $alamat, $kota, $kodepos, $telp, $email) = $row; 
            ?>
            <tr>
                <td><?php echo $n ?></td>
                <td><?php echo $id ?></td>
                <td><?php echo $id_barang ?></td>
                <td><?php echo $jumlah ?></td>
                <td><?php echo $namapembeli ?></td>
                <td><?php echo $alamat ?></td>
                <td><?php echo $kota ?></td>
                <td><?php echo $kodepos ?></td>
                <td><?php echo $telp ?></td>
                <td><?php echo $email ?></td>
                <td class="w3-center">
                    <a class="w3-btn w3-red" href="index.php?p=deletepenjualan&id=<?php echo $id ?>"> Delete </a>
                </td>
            </tr>
            <?php $n++; } while($row = mysqli_fetch_row($hasil)); ?>
        </table>
    </div>
    <div class="w3-bar w3-blue w3-center w3-display-bottommiddle">

    </div>