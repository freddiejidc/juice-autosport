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
                <form action="includes/gallery-upload.inc.php" method="post" class="container" enctype="multipart/form-data">
                <input type="text" name="filename" placeholder="File name...">
                <input type="text" name="filetitle" placeholder="Image title...">
                <input type="text" name="filedesc" placeholder="Image description...">
                <input type="file" name="file">
                <button type="submit" name="submit" class="btn">UPLOAD</button>
                </form>
            </div>';
            }   
           
            ?>
    <main>

    <section class= "gallery-links">
        <div class="wrapper">
            <h2><br></h2>

            <div class="gallery-container">
                <?php
                //connect to database file
                include_once 'includes/dbh.inc.php';

                // connect to sql table and set order by prepared statement
                $sql = "SELECT * FROM gallery ORDER BY idGallery DESC";
                $stmt = mysqli_stmt_init($conn);

                // run test for sql connect
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                  echo "Sql statement failed!";
                } else {
                    // execute sql results with while loop for row
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    while ($row = mysqli_fetch_assoc($result)) {
                    
                    
                  // show sql data in row by echo     
                 echo '<a href="#">
                       
                       <div class="gallery" style= "background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                       <img src = img/gallery/'.$row["imgFullNameGallery"].'>
                       <h3>'.$row["titleGallery"].'</h3>
                        <p>'.$row["descGallery"].'</p>
                   </a>';
                    }
                }
                ?>
            </div>
            
        </div>
    </section>
        </center></body>
</html>