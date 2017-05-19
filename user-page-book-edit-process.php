
<?php

if (isset($_POST['edit'])) {
    include "db.php";

    if (!db_connect()) {
        echo"<p>Connection Failed</p>";
    } else {
        if ($_POST["update-image"] == "0") {
            $id = mysqli_real_escape_string(db_connect(), $_POST["id"]);
            $date = mysqli_real_escape_string(db_connect(), $_POST["date"]);
            $title = mysqli_real_escape_string(db_connect(), $_POST["title"]);
            $discription = mysqli_real_escape_string(db_connect(), $_POST["discription"]);
            $detail = mysqli_real_escape_string(db_connect(), $_POST["detail"]);


            $query = "UPDATE book_tb
                      SET date = '" . $date . "', title = '" . $title . "', discription = '" . $discription . "', detail = '" . $detail . "' "
                    . "WHERE id = '" . $id . "'";

//echo $query;
            if (mysqli_query(db_connect(), $query)) {
                header("location:user-page.php");
            } else {
                echo "<p>Failed!</p>";
            }
        } else {
            $targetDirectory = "img/book/";
            $targetFile = $targetDirectory . basename($_FILES['imgUploaded']['name']);
            $uploadOk;
//            echo var_dump($_FILES['imgUploaded']);
            $check = getimagesize($_FILES['imgUploaded']['name']);
            if ($check !== false) {
                echo "<br>File is an image.";
                $uploadOk = true;
            } else {
                echo "<br>Not an image!";
                $uploadOk = false;
            }


            if ($uploadOk == false) {
                echo "<br> File was not uploaded.";
            } else {
                if (move_uploaded_file($_FILES['imgUploaded']['tmp_name'], $targetFile)) {

                    $id = mysqli_real_escape_string(db_connect(), $_POST["id"]);
                    $date = mysqli_real_escape_string(db_connect(), $_POST["date"]);
                    $title = mysqli_real_escape_string(db_connect(), $_POST["title"]);
                    $discription = mysqli_real_escape_string(db_connect(), $_POST["discription"]);
                    $detail = mysqli_real_escape_string(db_connect(), $_POST["detail"]);

                    $query = "UPDATE book_tb
                      SET date = '" . $date . "', title = '" . $title . "', discription = '" . $discription . "',img_path='" . $targetFile."', detail = '" . $detail . "' "
                    . "WHERE id = '" . $id . "'";
                    
//                    echo $query;


                    if (mysqli_query(db_connect(), $query)) {
                        unlink($_POST["update-image"]);
                        header("location:user-page.php");
                    } else {
                        echo "<p>Failed!</p>";
                    }
                }
            }
        }
    }
}
?>