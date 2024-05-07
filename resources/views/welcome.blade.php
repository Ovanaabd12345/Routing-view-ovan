
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>welcome</title>
</head>
<h1>SELAMAT DATANG!<?php echo $_GET["nama"];?> <?php echo $_GET["nama1"];?></h1> 
<div class="hiasan"> <br>
        <h3 style="font-family: 'Poppins';">Jenis Kelamin kamu adalah<?php echo " " . $_GET["gender"];?></h3>
        <h3 style="font-family: 'Poppins';">Dengan Kewarganegaraan<?php echo " " . $_GET["nationality"];?></h3>
        <h3 style="font-family: 'Poppins';">Dan <?php
        if(isset($_GET['language'])) {
            $languages = $_GET['language'];
            echo "menggunakan bahasa ";
            foreach($languages as $language) {
                echo $language . " ";
            }
            echo "<br>";
        } else {
            echo "Anda belum memilih bahasa<br>";
        }
    ?></h3>
        <h3 style="font-family: 'Poppins';">Bio mu : <?php echo $_GET["bio"];?></h3>
        <h3 style="font-family: 'Poppins';">Terimakasih telah bergabung di Website Kami, Media Belajar Kita Bersama</h3>
    </div>
<br><br>
</body>