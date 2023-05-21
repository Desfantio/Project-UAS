
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
    $itemsPerPage = 9;
    $totalItems = mysqli_num_rows($conn->query("SELECT * FROM barang"));
    
    // Get the current page from the URL query string
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    
    // Get the sorting order from the URL query string
    $sort = isset($_GET['sort']) ? $_GET['sort'] : '';
    $sortQuery = '';
    
    // Determine the sorting query based on the sorting order
    if ($sort == 'asc') {
        $sortQuery = 'ORDER BY harga ASC';
    } elseif ($sort == 'desc') {
        $sortQuery = 'ORDER BY harga DESC';
    }
    
    // Calculate the offset and limit for the database query
    $offset = ($page - 1) * $itemsPerPage;
    
    // Query the database to fetch the items for the current page with the sorting order
    $hasil = $conn->query("SELECT * FROM barang $sortQuery LIMIT $offset, $itemsPerPage");
    
    // Display the items
    while ($row = mysqli_fetch_row($hasil)) { 
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
        
    <?php 
    } 
    
    // Calculate the total number of pages
    $totalPages = ceil($totalItems / $itemsPerPage);
    
    // Display pagination links
    echo "<div class='pagination'>";
    if ($page > 1) {
        echo "<a href='index.php?page=".($page - 1)."&sort=$sort'>Previous</a>";
    }
    
    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $page) {
            echo "<a class='active' href='index.php?page=$i&sort=$sort'>$i</a>";
        } else {
            echo "<a href='index.php?page=$i&sort=$sort'>$i</a>";
        }
    }
    
    if ($page < $totalPages) {
        echo "<a href='index.php?page=".($page + 1)."&sort=$sort'>Next</a>";
    }
    echo "</div>";

    
    ?>
    <br>
    <br>
    <br>
    <div class="sorting-links">
        <a href="index.php?page=<?php echo $page; ?>&sort=asc">Sort by Harga (Asc)</a>
        <a href="index.php?page=<?php echo $page; ?>&sort=desc">Sort by Harga (Desc)</a>
    </div>
    
</div>
