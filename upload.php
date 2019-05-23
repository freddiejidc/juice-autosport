<?php
    //set each visitors session
    $_SESSION['username'] = "Admin";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><center>
<div class="header">
  <h1>Company Logo</h1>
  <p><br></p>
</div>
<?php 
            // form for info and data input/upload for members
            if (isset($_SESSION['username']))  {
                echo '<div class="bg-img">
                <form action="insta/gallery-upload.insta.php" method="post" class="container" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder="File name...">
                <input type="text" name="filetitle" placeholder="Image title...">
                <input type="text" name="filedesc" placeholder="Image description...">
                <input type="file" name="file">
                <button type="submit" name="submit" class="btn">UPLOAD</button>
                </form>
            </div>';
            }   
           
            ?>
</html>