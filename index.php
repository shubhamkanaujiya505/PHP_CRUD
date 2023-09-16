<?php include 'header.php' ?>
<?php include 'Database.php' ?>

<h2> All Students</h2>
<table class="table table-hover table-bordered table-striped">
    <thead>

    </thead>
    <tbody>

        <th style="color:red;">Id</th>
        <th style="color:red;">First Name</th>
        <th style="color:red;">Last Name</th>
        <th style="color:red;">Age</th>

        <?php
        $query = "select * from student";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("Query Failed" . mysqli_error());
        } else {

            while ($row = mysqli_fetch_assoc($result)) {
        ?>


                <tr>
                    <th><?php echo $row['id']; ?></th>
                    <th><?php echo $row['first_name']; ?></th>
                    <th><?php echo $row['last_name']; ?></th>
                    <th><?php echo $row['age']; ?></th>
                </tr>

        <?php


            }
        }
        ?>
    </tbody>
</table>

<?php include 'footer.php' ?>