<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

        <h1>Book Edit</h1>


        <?php
        include "db.php";

        if (!db_connect()) {
            echo"<p>Connection Failed</p>";
        } else {
            $query = "SELECT * FROM book_tb WHERE id=" . $_GET['id'];
            $queryResult = mysqli_query(db_connect(), $query);
            while ($row = mysqli_fetch_assoc($queryResult)) {
                $id = $row["id"];
                $date = $row["date"];
                $title = $row["title"];
                $discription = $row["discription"];
                $detail = $row["detail"];
                $img = $row["img_path"];

                echo "<form action='user-page-book-edit-process.php' method='post' enctype='multipart/form-data'>";
                echo "<div class='book-edit'>";
                echo "<input id='updateImage' type='hidden' name='update-image' value='" . $img . "' />";
                echo "<label>Current image</label><img name='current-image' src='" . $img . "' />";
                echo "<label>image</label><input id='fileUpload' type='file' name='imgUploaded' value='" . $img . "' />";
                echo "<label>ID</label><input type='text' name='id' value='" . $id . "' />";
                echo "<label>Date</label><input type='text' name='date' value='" . $date . "' />";
                echo "<label>Title</label><input type='text' name='title' value='" . $title . "' />";
                echo "<label>Discription</label><textarea name='discription'>" . $discription . "</textarea>";
                echo "<label>Detail</label><textarea name='detail'>" . $detail . "</textarea>";
                echo "<input type='submit' name='edit' value='Edit'>";
                echo "</div>";
                echo "</form>";
            }
        }
        ?>
    </body>
</html>



