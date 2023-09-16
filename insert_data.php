<?php
include 'Database.php';
if (isset($_POST['add_student'])) {

    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];

    if ($fname == "" || empty($fname)) {
        header('location:index.php?message=fill fname');
    } elseif ($lname == "" || empty($lname)) {
        header('location:index.php?message=fill lname');
    } elseif ($age == "" || empty($age)) {
        header('location:index.php?message=fill age');
    } else {
        $sql = "INSERT INTO student (first_name, last_name, age) VALUES ('$fname', '$lname', $age)";

        $result = mysqli_query($connection, $sql);

        if (!$result) {
            die("Query Failed" . mysqli_query());
        } else {
            header('location:index.php?insert_message=you have successfully add data');
        }
    }
}
