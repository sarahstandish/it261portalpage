<?php

include 'includes/header.php';
display_header('Books');

$result = get_sql_result($db, 'books', 'category', 'Books');
// $result = get_sql_result($db, 'books');

?>
<div class="main">
    <h2>Browse Our Book Suggestions</h2>
    <div class="book-cover-flex-container">

            <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                    <div class='book-cover'>
                        <a href="/it261/cascadiabookclub/book-view.php?id=<?php echo $row['book_id'] ?>">
                            <img src="/it261/cascadiabookclub/images/book<?php echo $row['book_id'] ?>.jpg" alt="<?php echo $row['title'] ?>">
                        </a>                 
                    </div>
                    <?php
                            }
                        }
                    ?>
    </div>
</div>

<?php 
//release the web server
mysqli_free_result($result);

//close the connection
mysqli_close($db);
include 'includes/footer.php';
?>