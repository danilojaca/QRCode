
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
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  </head>
  <body class="bg">
    <div class="container pt-5">
        <div class="col-md-6 offset-md-3">
            <nav class="navbar navbar-expand-sm">
                <div class="container-fluid">               
                    <div class="container navbar-nav justify-content-center  ">
                        <h1>QRCode</h1>
                    </div>  
                </div>
            </nav>
				  <hr>
          <form class="row g-3" action="decode.php" method="post" enctype="multipart/form-data">
            <div class="col-md-12">
					    <input type="file" class="form-control" name="qrimage" id="qrimage"  required>
            </div>
            <div class="col-md-6 offset-md-5">
					    <button type="submit" name="button" class="btn btn-outline-primary" >Ler QRCode</button>
            </div>
          </form>
		    </div>
	  </div>
  </body>
</html>