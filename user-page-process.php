<?php

session_start();
if (isset($_POST["submit"])) {

    $targetDirectory = "img/book/";
    $targetFile = $targetDirectory . basename($_FILES['imgUploaded']['name']);
    $uploadOk = true;

    include "db.php";

    if (!db_connect()) {
        echo"<p>Connection Failed</p>";
    } else {

        if (isset($_GET["delete"])) {
            $query = "DELETE FROM book_tb WHERE id =" . $_GET["delete"];
            mysqli_query(db_connect(), $query);
        }
  
        $date = mysqli_real_escape_string(db_connect(), $_POST["date"]);
        $title = mysqli_real_escape_string(db_connect(), $_POST["title"]);
        $discription = mysqli_real_escape_string(db_connect(), $_POST["discription"]);
        $detail = mysqli_real_escape_string(db_connect(), $_POST["detail"]);
        $imageName = mysqli_real_escape_string(db_connect(), $targetFile);

        if ($uploadOk == false) {
            echo "<br> File was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES['imgUploaded']['tmp_name'], $targetFile)) {
                echo "The File " . basename($_FILES['imgUploaded']['name']) . " has been uploaded.";

                $insert = "INSERT INTO book_tb (date,title,discription,detail,img_path) VALUES ('" . $date . "','" . $title . "','" . $discription . "','" . $detail . "','" . $imageName . "')";
                $resultInsert = mysqli_query(db_connect(), $insert);
                if ($resultInsert == true) {
                    header("location:user-page.php");
                }
            } else {
                echo "Sorry your file upload fell at the last fence.";
            }
        }
    }
}
?>