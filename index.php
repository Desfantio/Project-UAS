<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hyper Computer</title>
    <link href="images/logo.png" rel="shortcut icon">
    <link rel="stylesheet" href="w3.css">
</head>
<body>
    <div id="header">
        <center>
        <img src="images/logo.png" width=20% height=10%>
        </center>
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

    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-opacity" style="max-width:600px">

        <div class="w3-center"><br>
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            <img src="https://www.w3schools.com/w3css/img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
        </div>

        <form class="w3-container" action="login.php" method="POST">
            <div class="w3-section">
            <label><b>Username</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" name="username" value="admin" required>
            <label><b>Password</b></label>
            <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="password" value="admin" required>
            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
            </div>
        </form>

        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        </div>

        </div>
    </div>
</body>
</html>