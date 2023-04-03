<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <script src="likes.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="index.html"><img src="Logo.png" alt="Logo"></a></li>
            <li><a href="upload_post.php">Upload</a></li>
            <li><a href="register.php"><?php session_start();
                                             echo "<a href = 'profil.php'>Hallo , " . $_SESSION['username'] . '</a>';    
                                             ?></a></li>
        </ul>
    </header>

    <div class="main">
        <div class="main_content">
            <div class="profil">
              <h2>Dein Profil:</h2>
            </div>
            <div class="profil_banner">
              <img src="banner_platzthalter.jpg" alt="">
            </div>
        </div>
    </div>
</body>
</html>