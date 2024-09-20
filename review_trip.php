<?php
$conn = mysqli_connect("localhost", "root", "","techwiz")
or die("Connection failed");
if(isset($_POST['review_submit'])) {
    $review_name = $_POST['review_name'];
    $review_email = $_POST['review_email'];
    $review_area = $_POST['review_area'];

    $sql = "INSERT INTO trip_review(review_name, review_email, review_area)VALUES('{$review_name}',
    '{$review_email}', '{$review_area}')";
    $run = mysqli_query($conn, $sql);
}

?>