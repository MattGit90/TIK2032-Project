<?php
    include "../service/koneksi.php";

    if(isset($_POST['send'])) {
        $username = $_POST['username'];
        $yourtext = $_POST['yourtext'];

        $sql = "INSERT INTO review (username, review) VALUES 
        ('$username', '$yourtext')";

        if($db->query($sql)) {
                echo "Thank For The Review :)"; 
        }else {
            echo "Ooops Something Worng, We Can't Get Your Review :(";
        }
    }

?>


<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Matthew</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="style.css">
</head>


<body>
    <header>
        <div class="container form-container">
            <h1><a href="../index.php">Matthew Rarung</a></h1>
            <a href="" class=""></a>
            
                <ul class="nav-items">
                    <li class="active"><a href="../index.php"  class="nav-link clr-transition">Home</a></li>
                    <li><a href="../index.php#gallery"  class="nav-link clr-transition">Gallery</a></li>
                    <li><a href="../index.php#blog" class="nav-link clr-transition">Blog</a></li>
                    <li><a href="contact.php"  class="nav-link clr-transition">Contact</a></li> 
                </ul>
            </div>
    </header>

    <section class="background">
        <div class="container">
            <div class="main">
                <h2 class="hubungi">Hubungi Saya</h2>
                <div class="profil">
                    <img src="../gambar/profil.jpeg">
                </div>
        
                <ul>
                    <li><a href="https://www.instagram.com/matthew.rrg/" target="_blank"><img src="../gambar/ig.png" width="25px" height="25px"></a></li>
                    <li><a href="https://web.facebook.com/matthew.rarung.90/" target="_blank"><img src="../gambar/fb.png" width="25px" height="25px"></a></li>
                    <li><a href="https://www.linkedin.com/in/matthew-rarung-2a422328b/" target="_blank"><img src="../gambar/link.png" width="25px" height="25px"></a></li>
                    <li><a href="" target="_blank"><img src="../gambar/tw.png" width="25px" height="25px"></a></li>
                </ul>

                <form class="review-form" action="contact.php" method="post">
                    <h3>DIRECT REVIEW</h3>
                    <input type="text" placeholder="Name" name="username"/>
                    <textarea placeholder="Your Review" name="yourtext"></textarea>
                    <button type="submit" name="send">SEND</button>
                </form>
            </div>
        </div>
        
    </section>
    
</body>
</html>