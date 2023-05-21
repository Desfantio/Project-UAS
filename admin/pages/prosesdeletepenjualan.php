
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <center>
        <div class="w3-container">
            <div class="w3-panel w3-round-xxlarge w3-blue">
                <h3>PROSES HAPUS DATA PENJUALAN</h3>
            </div>
        </div>
        <hr width=320>
        <table>
            
                <?php
                require("../pages/koneksi.php");
                $id_Penjualan   = $_POST    ['id_Penjualan'];
                $id_barang      = $_POST    ['id_barang'];
                $jumlah         = $_POST    ['jumlah'];
                $alamat         = $_POST    ['alamat'];
                $kota           = $_POST    ['kota'];
                $kodepos        = $_POST    ['kodepos'];
                $telp           = $_POST    ['telp'];
                $email          = $_POST    ['emial'];
                ?>

                <input type="hidden" name="id_Penjualan" value="<?php echo $id_Penjualan ?>">
                <tr>
                    <td>Kode Barang</td>
                </tr>
                
            
        </table>
        <hr width=320>
        <div class="w3-container w3-red">
            <p>Data Penjualan Sudah Di Hapus</p>
            <a href="index.php?p=viewpenjualan" class="w3-btn w3-round-xxlarge w3-black w3-margin-bottom">Kembali</a>
        </div>
    </center>
    <div class="w3-bar w3-blue w3-center w3-display-bottommiddle">

    </div>