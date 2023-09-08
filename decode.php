<?php
namespace Zxing;

require("vendor/autoload.php");
$qrcode= new QrReader($_FILES['qrimage']['tmp_name']);
$text= $qrcode->text();

?>
<!DOCTYPE html>
<html lang="pt">
  <head>
	  <meta charset="UTF-8">
      <link rel="icon" type="images/x-icon" href="img/qrcodeicon.png" />
	  <title>Leitor QRCode</title>
      <link rel="stylesheet" type="text/css" href="qr.css">
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
            <div class="container pt-5">
		        <div class="container" style="text-align: center;">
                <p><?php 
                    if ($text == "") {
                        echo  "<div class='alert alert-danger'>Codigo Invalido </div>" ;
                        
                    }else {
                        echo "<i class='bi bi-qr-code'></i> $text";
                    }
                    ?></p>
                </div>    
	        </div>
        </div>
    </div>    	
</body>
</html>