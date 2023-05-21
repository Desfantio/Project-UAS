
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <center>
        <hr width=320>
        <table>
        <?php
            require("koneksi.php");
                
            // Memeriksa apakah ada pengiriman formulir
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Mengambil nilai dari formulir
                $id_barang = $_POST['id_barang'];
                $jumlah = $_POST['jumlah'];
                $namapembeli = $_POST['namapembeli'];
                $alamat = $_POST['alamat'];
                $kota = $_POST['kota'];
                $kodepos = $_POST['kodepos'];
                $telp = $_POST['telp'];
                $email = $_POST['email'];
            
                // Query SQL untuk mengunggah data ke tabel penjualan
                $sql = "INSERT INTO penjualan (id_barang, jumlah, namapembeli, alamat, kota, kodepos, telp, email) 
                        VALUES ('$id_barang', '$jumlah', '$namapembeli', '$alamat', '$kota', '$kodepos', '$telp', '$email')";
                $updatestok="update barang set stok = stok-'$jumlah' where id_barang='$id_barang'";
                $savestok=mysqli_query($conn,$updatestok);
                if (mysqli_query($conn, $sql)) {
                    echo "Data berhasil diunggah ke database.";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            }
            
            // Menampilkan data dari tabel penjualan
            $result = mysqli_query($conn, "SELECT * FROM penjualan");
            ?>
            
            <h2>Data Pembelian</h2>
            <table border="1">
                <tr>
                    <th>ID Barang</th>
                    <th>Jumlah</th>
                    <th>Nama Pembeli</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>KodePos</th>
                    <th>Telp</th>
                    <th>Email</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id_barang'] . "</td>";
                    echo "<td>" . $row['jumlah'] . "</td>";
                    echo "<td>" . $row['namapembeli'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>" . $row['kota'] . "</td>";
                    echo "<td>" . $row['kodepos'] . "</td>";
                    echo "<td>" . $row['telp'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
                ?>
        </table>
        <h1>Data Penjualan telah di Simpan</h1>
        <hr>
        <br>
        <a class="w3-btn w3-round-xxlarge w3-red w3-margin-bottom" href="index.php">Kembali ke Toko</a>
    </center>

    <?php
// Menutup koneksi ke database
mysqli_close($conn);
?>