<?php include 'header.php' ?>
<?php include 'Database.php' ?>

<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);




if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "select * from student where id = $id";
    $result = mysqli_query($connection, $sql);

    if (!$result) {
        die("Query Failed");
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}
?>

<?php
if (isset($_POST['update_student'])) {
    if (isset($_GET['new_id'])) {
        $idnew = $_GET['new_id'];
    }
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];


    $result = "update student set first_name = '$fname', last_name = '$lname', age = $age where id = $idnew";
    $sql = mysqli_query($connection, $result);
    if (!$sql) {
        die("Query Failed");
    } else {
        header("location:index.php?update_msg=you have successfully updated");
    }
}

?>



<form action="Update.php?new_id=<?php echo $id ?>" method="post">
    <div class="form-group">
        <label for="f_name">First Name</label>
        <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name'] ?>">
    </div>
    <div class="form-group">
        <label for="l_name">Last Name</label>
        <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name'] ?>">
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" name="age" class="form-control" value="<?php echo $row['age'] ?>">
    </div>
    <input type="submit" class="btn btn-success" name="update_student" value="Update">
</form>


<?php include 'footer.php' ?>