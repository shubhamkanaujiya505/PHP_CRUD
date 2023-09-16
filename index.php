<?php include 'header.php' ?>
<?php include 'Database.php' ?>

<div class="box1">
    <h2> All Students</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Students
    </button>

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
                die("Query Failed");
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

    <form>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="f_name">First Name</label>
                            <input type="text" name="f_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="l_name">Last Name</label>
                            <input type="text" name="l_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="text" name="age" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php include 'footer.php' ?>