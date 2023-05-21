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

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diunggah ke database.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<form action="index.php?p=savebeli" method="post" class="w3-margin-bottom">
    <center>
        <table border="0">
            <?php
            $id_barang = $_GET['id_barang'];
            $hasil = $conn->query("SELECT * FROM barang WHERE id_barang = '$id_barang'");
            $stok = $_GET['stok'];

            if ($stok < 1) {
                ?>
                <script>
                    alert('Stok habis');
                    window.location.href='index.php';
                </script>
            <?php }
            $row = mysqli_fetch_row($hasil);
            do {
                list($id_barang, $nama_laptop, $processor, $ram, $igp, $gpu, $monitor, $kapasitas_baterai, $daya_charger, $storage, $bobot, $bluetooth, $OS, $IO, $harga, $stok) = $row;
                ?>
                <input name="id_barang" value="<?php echo $id_barang; ?>" hidden>
                <tr>
                    <td>Nama Barang</td>
                    <td><input name="nama_laptop" value="<?php echo $nama_laptop; ?>" readonly size="40"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input name="harga" value="<?php echo $harga; ?>" readonly size="40"></td>
                </tr>
                <tr>
                    <td>Jumlah Beli</td>
                    <td>
                        <select name="jumlah">
                            <?php for ($i = 1; $i <= $stok; $i++) echo "<option>$i"; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Pembeli</td>
                    <td><input name="namapembeli" size="40" placeholder="Nama Lengkap" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input name="alamat" size="40" placeholder="Jl.Contoh" required></td>
                </tr>
                <tr>
                    <td>Kota</td>
                    <td><input name="kota" size="40" placeholder="Kota" required></td>
                </tr>
                <tr>
                    <td>KodePos</td>
                    <td><input name="kodepos" size="40" placeholder="XXXXX" required></td>
                </tr>
                <tr>
                    <td>Telp</td>
                    <td><input name="telp" type="number" size="40" placeholder="+62XXXX..." required></td>
                </tr>
                <tr>
                    <td>E-Mail</td>
                    <td><input name="email" type="email" size="40" placeholder="email@mail.com" required></td>
                </tr>
            <?php
            } while ($row = mysqli_fetch_row($hasil));
            ?>
        </table>
        <hr width="400">
        <button class="w3-btn w3-round-xxlarge w3-light-green" type="submit">Beli Sekarang!</button>
        <a class="w3-btn w3-round-xxlarge w3-red" href="index.php">Kembali ke Toko</a>
    </center>
</form>

<?php
// Menutup koneksi ke database
mysqli_close($conn);
?>
