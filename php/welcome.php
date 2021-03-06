<?php
    // Initialize the session
    session_start();
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project Customyze</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../svg/logo.svg" type="image/gif" sizes="16x16"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,600" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body class="container-fluid">
    
    <nav class="navbar nav-bar row">
        <a href="../html/home.php"><img src="../svg/name_logo.svg" class="logo"></a>        
        <button type="button" class="navbar-toggle nav-toggle side-button" data-toggle="collapse" data-target="#my-nav"></button>
        <div class="lg-menu" id="my-nav">
            <ul class="mr-auto pc-list">
                <li><a href="../html/logout.php" class="nav-links">Logout</a></li>
                <li class="nav-links"><img class="mx-1" src="../svg/user.svg"><?php echo $_SESSION["email"]; ?></li>
            </ul>
        </div>
    </nav>
    
    <div class="landing row"></div>

    <div class="row text-center mx-auto py-5">
        <a href="../html/computer.php" class="devices m-4 col"><img class="h-75" src="../svg/pc.svg"></a>
        <a href="../html/laptop.php" class="devices m-4 col ml-md-3"><img class="h-75" src="../svg/laptop.svg"></a>
        <a href="../html/phone.php" class="devices m-4 col"><img class="h-75" src="../svg/phone.svg"></a>
    </div>

    <footer class="row footer">
        <div class="mx-auto my-auto">
            <a class="media-icons" target="_blank" href="https://www.instagram.com/"><img class="px-1" width="50px" src="../svg/instagram.svg"></a>
            <a class="media-icons" target="_blank" href="https://www.facebook.com/"><img class="px-1" width="50px" src="../svg/facebook.svg"></a>
            <a class="media-icons" target="_blank" href="https://www.twitter.com/"><img class="px-1" width="50px" src="../svg/twitter.svg"></a>
            <a class="media-icons" target="_blank" href="https://www.linkedin.com/"><img class="px-1" width="50px" src="../svg/linkedin.svg"></a>
        </div>
        <div class="refer">Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik" target="_blank">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon" target="_blank">www.flaticon.com</a></div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>