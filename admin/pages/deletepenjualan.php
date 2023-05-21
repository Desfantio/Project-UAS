<script>
    function goBack() {
        window.history.back();
    }
</script>

<style>
    .center {
        text-align: center;
    }
</style>

<div class="center">
    <div class="w3-container">
        <div class="w3-panel w3-round-xxlarge w3-blue">
            <h3>HAPUS DATA PENJUALAN</h3>
        </div>
    </div>
    <hr width="320">
    <?php
    require("../pages/koneksi.php");
    if (isset($_GET['id'])) {
        $id_Penjualan = $_GET['id'];
        $hasil = $conn->query("SELECT * FROM penjualan WHERE id_Penjualan = '$id_Penjualan'");
        if ($hasil->num_rows > 0) {
            $row = $hasil->fetch_assoc();
            $id_Penjualan = $row['id_Penjualan'];
            $id_barang = $row['id_barang'];
            $jumlah = $row['jumlah'];
            $namapembeli = $row['namapembeli'];
            $alamat = $row['alamat'];
            $kota = $row['kota'];
            $kodepos = $row['kodepos'];
            $telp = $row['telp'];
            $email = $row['email'];
            ?>
            <form action="index.php?p=prosesdeletepenjualan" method="POST">
                <center>
                    <table>
                        <tr>
                            <td>KODE BARANG</td>
                            <td><input size="40" value="<?php echo $id_barang ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>JUMLAH</td>
                            <td><input size="40" value="<?php echo $jumlah ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>NAMA PEMBELI</td>
                            <td><input size="40" value="<?php echo $namapembeli ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>ALAMAT</td>
                            <td><input size="40" value="<?php echo $alamat ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>KOTA</td>
                            <td><input size="40" value="<?php echo $kota ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>KODE POS</td>
                            <td><input size="40" value="<?php echo $kodepos ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>TELP</td>
                            <td><input size="40" value="<?php echo $telp ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>EMAIL</td>
                            <td><input size="40" value="<?php echo $email ?>" readonly></td>
                        </tr>
                        <input type="hidden" name="id_Penjualan" value="<?php echo $id_Penjualan ?>">
                    </table>
                </center>
                <hr width="320">
                <div class="w3-container w3-margin-bottom">
                    <p><button class="w3-button w3-blue w3-round-xxlarge" type="submit">PROSES HAPUS</button></p>
                </div>
            </form>
    <?php
        } else {
            echo '<p>Data Penjualan tidak ditemukan.</p>';
        }
    } else {
        echo '<p>Parameter ID tidak ditemukan.</p>';
    }
    ?>
</div>
<div class="w3-bar w3-blue w3-center w3-display-bottommiddle"></div>
