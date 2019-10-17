<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body style="background-image:url('https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg')">
    <div class="container">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
            <button type="submit" formaction="main.php">Log Out</button>
        </form>
      </div>
    </div>
  </body>
</html>
