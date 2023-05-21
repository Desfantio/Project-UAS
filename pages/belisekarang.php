<form action="index.php?p=savebeli" method=post class="w3-margin-bottom">
    <center>
        <table border=0>
            <?php
            require("koneksi.php");
            $id_barang = $_GET['id_barang'];
            $hasil = $conn->query("SELECT * FROM barang WHERE id_barang = '$id_barang'");
            $stok = $_GET['stok'];

            if($stok < 1) { ?>
                <script>
                    alert('Stok habis');
                    window.location.href='index.php';
                </script>
            <?php }
            $row = mysqli_fetch_row($hasil);
            do {
                list($id_barang, $nama_laptop, $processor, $ram, $igp, $gpu, $monitor, $kapasitas_baterai, $daya_charger, $storage, $bobot, $bluetooth, $OS, $IO, $harga, $stok) = $row;
                ?>

                 
                <input name="id_barang" value='<?php echo $id_barang;   ?>' hidden>
                <tr><td>Nama Barang <td>        <input name="nama_laptop" value='<?php echo $nama_laptop  ?>' readonly size=40>
                <tr><td>Harga       <td>        <input name="harga" value='<?php echo $harga?>' readonly size=40>
                <tr><td>Jumlah Beli <td>        <select name="jumlah">
                <?php for ($i = 1; $i <= $stok; $i++) echo "<option>$i";?>
                <tr><td>Nama Pembeli    <td><input name="namapembeli"                   size=40 placeholder="Nama Lengkap"   required> 
                <tr><td>Alamat          <td><input name="alamat"                        size=40 placeholder="Jl.Contoh"      required>
                <tr><td>Kota            <td><input name="kota"                          size=40 placeholder="Kota"           required>
                <tr><td>KodePos         <td><input name="kodepos"                       size=40 placeholder="XXXXX"          required>
                <tr><td>Telp            <td><input name="telp"          type="number"   size=40 placeholder="+62XXXX..."     required>
                <tr><td>E-Mail          <td><input name="email"         type="email"    size=40 placeholder="email@mail.com" required>
                

                <?php
            } while ($row = mysqli_fetch_row($hasil));
            ?>
        </table>
        <hr width=400>
        <button class="w3-btn w3-round-xxlarge w3-light-green">Beli Sekarang!</button>
        <a class="w3-btn w3-round-xxlarge w3-red" href="index.php">Kembali ke Toko</a>
    </center>
</form>
