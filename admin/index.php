<?php
session_start();
if(!$_SESSION['login']) {
    exit(header("Location: ../index.php"));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hyper Computer Store</title>
    <link href=".../images/logo.png" rel="shortcut icon">
    <link rel="stylesheet" href="../w3.css">
</head>
<body>
    <div id="header">
        <center>
        <img src="../images/logo.png" width=30% height=10%>
        </center>
    </div>
    <div class="w3-bar w3-blue">
        <a href="index.php?p=home" class="w3-bar-item w3-button">Main Menu</a>
        <a href="index.php?p=inputbarang" class="w3-bar-item w3-button">Input Data</a>
        <a href="index.php?p=selectbarang" class="w3-bar-item w3-button">Daftar Isi Tabel</a>
        <a href="index.php?p=viewpenjualan" class="w3-bar-item w3-button">Data Penjualan</a>
        <a href="index.php?p=profiles" class="w3-bar-item w3-button">Profiles</a>
        
        <div class="w3-dropdown-hover">
            <a href="index.php?p=logout" class="w3-bar-item w3-button">Logout</a> 
        </div>
    </div>
    <div id="konten">
        <?php
        $pages_dir = 'pages';
        if (!empty($_GET['p'])) {
            $pages = scandir($pages_dir, 0);
            unset($pages[0], $pages[1]);
            $p = $_GET['p'];
            if (in_array($p . '.html', $pages)) {
                include($pages_dir . '/' . $p . '.html');
            } else if (in_array($p . '.php', $pages)) {
                include($pages_dir . '/' . $p . '.php');
            } else {
                echo "$pages_dir Halaman tidak ditemukan! :(";
            }
        } else {
            include($pages_dir . '/home.php');
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>

        <!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
    
    
        <!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set di dalam session sukses  -->
        <?php if(@$_SESSION['sukses']){ ?>
            <script>
                Swal.fire({            
                    icon: 'success',                   
                    title: 'Sukses',    
                    text: 'data berhasil dihapus',                        
                    timer: 3000,                                
                    showConfirmButton: false
                })
            </script>
        <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
        <?php unset($_SESSION['sukses']); } ?>
    
    
        <!-- di bawah ini adalah script untuk konfirmasi hapus data dengan sweet alert  -->
        <script>
            $('.alert_notif').on('click',function(){
                var getLink = $(this).attr('href');
                Swal.fire({
                    title: "Yakin hapus data?",            
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: "Batal"
                
                }).then(result => {
                    //jika klik ya maka arahkan ke proses.php
                    if(result.isConfirmed){
                        window.location.href = getLink
                    }
                })
                return false;
            });
        </script>

</body>
</html>