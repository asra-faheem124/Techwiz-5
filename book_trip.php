<?php
$conn = mysqli_connect("localhost", "root", "","techwiz")
or die("Connection failed");

if(isset($_POST['book_submit'])) {
    $trip_name = $_POST['trip_name'];
    $trip_destination = $_POST['trip_destination'];
    $trip_start_date = $_POST['trip_start_date'];
    $trip_end_date = $_POST['trip_end_date'];
    $trip_budget = $_POST['trip_budget'];
    $expense_transport = $_POST['expense_transport'];
    $expense_acc = $_POST['expense_acc'];
    $expense_food = $_POST['expense_food'];
    $trip_notes = $_POST['trip_notes'];

    $sql = "INSERT INTO trips(trip_name, trip_destination, trip_start_date, trip_end_date,
    trip_budget, expense_transport, expense_accomodation, expense_food, trip_notes)
    VALUES('{$trip_name}', '{$trip_destination}', '{$trip_start_date}', '{$trip_end_date}',
    '{$trip_budget}', '{$expense_transport}', '{$expense_acc}', '{$expense_food}', '{$trip_notes}')";

    $run = mysqli_query($conn,$sql);
    header("Location: index.php");
}

?>