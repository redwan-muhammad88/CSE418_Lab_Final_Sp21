<?php


$conn = new mysqli('localhost', 'root', '', 'loginpp');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="row" style="min-height:500px;">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card position-relative">
                <div class="card-body">


                    <h2>All User Information

                    </h2>

                    <a href="logout.php" class="btn btn-sm btn-info" style="margin: auto right;">Logout</a>
                    <hr>


                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Age</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>



                            <?php

                            $sql = "SELECT * FROM users_reg";
                            $data = $conn->query($sql);
                            $i =  1;

                            while ($single_data = $data->fetch_assoc()) :


                            ?>

                            <tr>
                                <td><?php echo $i;
                                        $i++;  ?></td>
                                <td><?php echo $single_data['user_id']; ?></td>
                                <td><?php echo $single_data['name']; ?></td>
                                <td><?php echo $single_data['uname']; ?></td>
                                <td><?php echo $single_data['email']; ?></td>
                                <td><?php echo $single_data['age']; ?></td>

                                <td>
                                    <a class="btn btn-success btn-sm"
                                        href="profile.php?user_id=<?php echo $single_data['user_id']; ?>">View</a>
                                    <a class="btn btn-primary btn-sm"
                                        href="edit_user.php?user_id=<?php echo $single_data['user_id']; ?>">Edit</a>


                                </td>
                            </tr>

                            <?php endwhile;  ?>





                        </tbody>
                    </table>





                </div>
            </div>
        </div>
    </div>





    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
    (function($) {
        $(document).ready(function() {




        });
    })(jQuery)
    </script>
</body>

</html>