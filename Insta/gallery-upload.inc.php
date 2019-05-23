<?php
  if (isset($_POST['submit']))  {
    
    $newFileName = $_POST['filename'];
    if (empty($newFileName)) {
        $newFileName = "auto";
    } else {
       $newFileName = strtolower(str_replace(" ", "-", $newFileName));
    }
    $imageTitle = $_POST['filetitle'];
    
    
    $file = $_FILES["file"];

  //print_r($file);

   $fileName = $file["name"];
   $fileType = $file["type"];
   $fileTempName = $file["tmp_name"];
   $fileError = $file["error"];
   $fileSize = $file["size"];

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpg", "jpeg", "png");

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 20000000) {
               $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
                $fileDestination = "images/" . $imageFullName;
                $imageDesc = $_POST['filedesc'];

                include_once "includes/dbh.insta.php";
                if (empty($imageTitle) || empty($imageDesc)) {
                    header("Location: ../gallery.php?upload-empty");
                    exit();
                } else {
                    $sql = "SELECT * FROM tbl_product;";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL STMT FAILED!";
                    } else {
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $rowCount = mysqli_num_rows($result);
                        $setImageOrder = $rowCount + 1;

                        $sql = "INSERT INTO tbl_product (nameb, imageb, price) VALUE(?,?,?);";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "SQL STMT FAILEDX!";
                        } else {
                            mysqli_stmt_bind_param($stmt, "ssd", $imageTitle, $imageFullName, $imageDesc);
                            mysqli_stmt_execute($stmt);
                            
                            move_uploaded_file($fileTempName, $fileDestination);

                            header("Location: ../gallery.php?upload-success");
                        }
                    }
                }
            } else {
                echo "File Size is too big!";
                exit();
            }
        } else {
            echo "You had an error!";
            exit();
        }
    } else {
    echo "You need to upload a proper file type!";
    exit();

    }


  } 
