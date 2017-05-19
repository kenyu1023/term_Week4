<?php
session_start();
if (isset($_POST["logout"]) && !isset($_SESSION["uname"])) {
    unset($_SESSION['uname']);
    session_destroy();
    header("location:login.php");
}
include "partials/header.php";
?>
<div class="user-page">
    <div class="small-12 medium-12 large-12 columns">
        <h1>Welcome to user page!</h1>
        <div class="user-form">
            <form action="user-page-process.php" method="post" enctype="multipart/form-data">
                <div class="small-12 medium-12 large-3 columns">
                    <label>Image</label>
                </div>
                <div class="small-12 medium-12 large-11 columns">
                    <input type="file"
                           id="img"
                           name="imgUploaded">
                </div>

                <div class="small-12 medium-12 large-3 columns">
                    <label>Date</label>
                </div>
                <div class="small-12 medium-12 large-11 columns">
                    <input type="text"
                           name="date"
                           id="date"
                           placeholder="date">
                </div>

                <div class="small-12 medium-12 large-3 columns">
                    <label>Title</label>
                </div>
                <div class="small-12 medium-12 large-11 columns">
                    <input type="text"
                           name="title"
                           id="title"
                           placeholder="title">
                </div>

                <div class="small-12 medium-12 large-3 columns">
                    <label>Discription</label>
                </div>
                <div class="small-12 medium-12 large-11 columns">
                    <textarea name="discription"
                              id="discription"
                              placeholder="Discription"></textarea>      
                </div>

                <div class="small-12 medium-12 large-3 columns">
                    <label>Detail</label>
                </div>
                <div class="small-12 medium-12 large-11 columns">
                    <textarea name="detail"
                              id="detail"
                              placeholder="Detail"></textarea>      
                </div>

                <div class="small-12 medium-12 large-12 columns">
                    <input type="submit"
                           name="submit"
                           value="Submit" />
                </div>
            </form>

            <form action="user-page.php" method="post">
                <div class="small-12 medium-12 large-12 columns">
                    <input type="submit"  name="logout" value="Log out" />
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include "db.php";

if (!db_connect()) {
    echo"<p>Connection Failed</p>";
} else {

    if (isset($_GET["delete"])) {
        $query = "DELETE FROM book_tb WHERE id =" . $_GET["delete"];
        mysqli_query(db_connect(), $query);
    }

    $query = "SELECT * FROM book_tb";
    $queryResult = mysqli_query(db_connect(), $query);
    $numberOfRows = mysqli_num_rows($queryResult);

    if ($numberOfRows > 0) {
        while ($row = mysqli_fetch_assoc($queryResult)) {
            $id = $row["id"];
            $date = $row["date"];
            $title = $row["title"];
            $discription = $row["discription"];
            $detail = $row["detail"];
            $img = $row["img_path"];

            echo "<div class='book-insert'>";
            echo "<div class='small-12 medium-12 large-12 columns'>";
            echo "<div class='user-display'>";
            echo "<div class='insert-img medium-12 large-6 columns'>" . "<img src='" . $img . "'></div>";
            echo "<div class='insert-img medium-12 large-6 columns'>";
            echo "<div class='user-display-right'>";
            echo "<label>Date</label><h5>$date</h5>";
            echo "<label>Title</label><h3>$title</h3>";
            echo "<label>Discription</label><p>$discription</p>";
            echo "<label>Detail</label><p>$detail</p>";
            echo "<div class='user-display-right-btn'>";
            echo "<a href='user-page-book-edit.php?id=" . $id . "'>Edit</a>";
            echo "<a href='user-page.php?delete=" . $id . "'>Delete</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<p>There's no contents</p>";
    }
}
?>
