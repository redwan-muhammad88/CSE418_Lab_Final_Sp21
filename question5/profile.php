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



    <div class="card w-50 mx-auto mt-5 profile">
        <div class="card-body">
            <?php

			$sql = "SELECT * FROM users_reg";
			$data = $conn->query($sql);
			$i =  1;

			$single_data = $data->fetch_assoc()


			?>

            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>User ID</td>
                        <td><?php echo $single_data['user_id']; ?></td>
                    </tr>
                    <tr>
                        <td>Full Name</td>
                        <td><?php echo $single_data['name']; ?> </td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td><?php echo $single_data['email']; ?></td>
                    </tr>

                    <tr>
                        <td>Username</td>
                        <td><?php echo $single_data['uname']; ?></td>
                    </tr>

                    <tr>
                        <td>Age</td>
                        <td><?php echo $single_data['age']; ?></td>
                    </tr>

                </tbody>
            </table>


            <h2></h2>
            <h3></h3>
            <h3></h3>

        </div>
        <div class="card-footer">
            <a href="dashboard.php">
                << Back</a>
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