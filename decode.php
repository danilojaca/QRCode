<?php

require("vendor/autoload.php");
use Zxing\QrReader;

$dir = "img/" ;
$imageFile = $dir . basename($_FILES['qrimage']['name']);
$imageType = $_FILES['qrimage']['type'];
$imageType = explode("/",$imageType);
$imageType = $imageType[1];
$imagemtemp = $_FILES['qrimage']['tmp_name'];
move_uploaded_file($imagemtemp, $imageFile);

list($width_orig, $height_orig) = getimagesize($imageFile);

$width = $width_orig * 1.1;
$height = $height_orig * 1.1;

$image_p = imagecreate($width, $height);

if($imageType == "jpeg"){
$image = imagecreatefromjpeg($imageFile);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

$bg = imagecolorat($image_p,  0, 0);
imagecolorset($image_p, $bg, 255, 255, 255);

imagejpeg($image_p, $imageFile);
imagedestroy($image);

}elseif ($imageType == "png") {
$image = imagecreatefrompng($imageFile);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

$bg = imagecolorat($image_p, 0, 0);
imagecolorset($image_p, $bg, 255, 255, 255);

imagepng($image_p, $imageFile);
imagedestroy($image);
}
$qrcode = new QrReader($imageFile);
$text = $qrcode->text();


?>
<!DOCTYPE html>
<html lang="pt">
  <head>
	  <meta charset="UTF-8">
      <link rel="icon" type="images/x-icon" href="img/qrcodeicon.png" />
	  <title>Leitor QRCode</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
<body class="bg">
    <div class="container pt-5">
        <div class="col-md-6 offset-md-3">
            <nav class="navbar navbar-expand-sm">
                <div class="container-fluid">               
                    <div class="container navbar-nav justify-content-center  ">
                        <h1>QRCode</h1>
                    </div>
                    <ul class="navbar-nav g-3">      
                        <li class="nav-item">
                            <a class="btn btn-primary" href="index.php"><i class="bi bi-reply-fill"></i></a>
                        </li>
                    </ul>            
                </div>
            </nav>
            <hr>
            <div class="container ">
		        <div class="container" style="text-align: center;">
                <p><?php 
                    if ($text == NULL) {
                        echo  "<div class='alert alert-danger'>QRCode não encontrado </div>" ;
                        
                    }else {
                        echo "<div class='col-md-12'>
                        <p> $text </p>
                        </div>" ;
                    }
                    ?></p>
                </div>    
	        </div>
        </div>
    </div>    	
</body>
<script>
function copy() {
    alert("Copied the text: " + copyText.value);
  var copyText = <?php $text?>;
  copyText.select();
  copyText.setSelectionRange(0, 99999); 
  navigator.clipboard.writeText(copyText.value);
    
}
</script>
</html>
