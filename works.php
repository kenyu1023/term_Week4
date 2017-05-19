<?php include "partials/header.php"; ?>
<div class="modalBox" id="modalBox">
    <p id="detail-modalBoxs"></p>
    <div class="closeModal"id="closeModal"><h3>&times</h3>
    </div>
    <div>
<!--        <img id="modalBoxImage" src="" alt="">-->
    </div>
</div>
    <div class="works">

        <h1>Books</h1>

        <?php
        include "db.php";
        if (!db_connect()) {
            echo"<p>Connection Failed</p>";
        } else {

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

                    echo "<div class='book-section'>";
                    echo"<div class='small-12 medium-4 large-3 columns'>";
                    echo"<div class='each-book'>";
                    echo "<div class='work-img' data-id='$id'><img src='" . $img . "'></div>";
                    echo "<h5>$date</h5>";
                    echo "<h3>$title</h3>";
                    echo "<p>$discription</p>";
                    echo "<input type='hidden' value='$detail' id='detail-$id'>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p>There's no contents</p>";
            }
        }
        ?>
    </div>

<?php include "partials/footer.php"; ?>