<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <script src="likes.js"></script>
    <script src="datenbanklike.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="index.php"><img src="Logo.png" alt="Logo"></a></li>
            <li><a href="upload_post.php">Upload</a></li>
            <li><a href="register.php"><?php session_start();
                                             echo "<a href = 'profil.php'>Hallo , " . $_SESSION['username'] . '</a>';    
                                             ?></a></li>
        </ul>
    </header>

    <div class="main">
        <div class="main_content">
            <?php include "db_conn.php"; ?>

            <?php 
                $sql = "SELECT * FROM images ORDER BY id DESC";
                $res = mysqli_query($conn,  $sql);

                if (mysqli_num_rows($res) > 0) {
                    while ($images = mysqli_fetch_assoc($res)) {?>
                  <div class="post">
                    <div class="username">
                        <?php echo('<h4>' . $images['username'] . '</h4>')  ?>
                    </div>
                    
                    <div class="image">
                        <img src="uploads/<?=$images['image_url']?>">
                    </div>
                    <div class="wrapper">
                        <div class="post_bar">
                            <div class="likes">
                                <button onclick="updateData()">
                                    <img id = "notliked" width="40px" height="40px" src="like1.png" alt="">
                                </button>
                            </div>
                            <div class="comments">
                                <button>
                                    <img width="40px" height="40px" src="plaudern (1).png" alt="">
                                </button>
                            </div>
                            <div class="report">
                                <button>
                                    <img width="40px" height="40px" src="megaphon (1).png" alt="">
                                </button>
                            </div>
                        </div>
                  </div>

            </div>
                        
            <?php } }?>
        </div>
    </div>
</body>
</html>