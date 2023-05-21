
    <div class="w3-container w3-blue w3-animate-opacity">
        <button class="w3-btn w3-margin w3-red   w3-animate-opacity" onclick="document.getElementById('id01').style.display='block'"> ADMIN     </button>
        
    </div>

    

    <div class="w3-container">
        <div class="w3-container w3-margin-top w3-center w3-round-large w3-blue w3-animate-opacity">
            <h1> 
                Selamat Datang di Hyper Computer Store
            </h1>
        </div>
    </div>


    <div class="w3-row-padding w3-margin-top w3-margin-bottom">

        <?php 
        require("koneksi.php"); 
        $hasil = $conn->query("SELECT * FROM barang");
        $row = mysqli_fetch_row($hasil); 
        do { 
            list($id_barang, $nama_laptop, $processor, $ram, $igp, $gpu, $monitor, $kapasitas_baterai, $daya_charger, $storage, $bobot, $bluetooth, $OS, $IO, $harga, $stok) = $row; 
        ?>
        
        <div class="w3-third">
            <div class="w3-card w3-animate-opacity">
                <br>
                <center>
                    <img src="./images/<?php echo $id_barang ?>.png" alt="" width="50%" height="30%">
                </center>
                <div class="w3-container">
                    <h5>
                      Nama : <?php echo $nama_laptop ?><br>
                       RAM : <?php echo $ram ?><br>
                        CPU : <?php echo $processor ?><br>
                        GPU : <?php echo $gpu ?><br>
            
                        Rp. <?php echo number_format($harga,2,",",".") ?><br>
                        Stok : <?php echo $stok ?>
                    </h5>
                    <a class="w3-btn w3-red" href="index.php?p=belisekarang&id_barang=<?= $id_barang?>&stok=<?= $stok?>"> Beli Sekarang </a>
                </div>
                <br>
            </div>
            <br>
        </div>
        <?php } while($row = mysqli_fetch_row($hasil)); ?>
    </div>