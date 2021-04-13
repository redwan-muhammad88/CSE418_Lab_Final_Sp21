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

    <?php

    if (isset($_GET['user_id'])) {

        $user_id = $_GET['user_id'];

        if (isset($_POST['submit'])) {

            // get form data
            $name = $_POST['name'];
            $uname = $_POST['uname'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];



            $sql = "UPDATE users_reg SET name='$name', uname='$uname', email='$email', age='$age', pass='$password', status = 'Active' WHERE user_id='$user_id'";
            $conn->query($sql);


            echo "<p class='alert alert-success w-50 mx-auto'> User Update Successfull !</p>";
        }
    }



    ?>

    <div class="log w-50 mx-auto mt-2 shadow">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Edit User

                </h2>
                <a class=" btn btn-info btn-sm" href="dashboard.php">All User</a>
            </div>

            <?php

            $sql = "SELECT * FROM users_reg";
            $data = $conn->query($sql);
            $i =  1;

            $single_data = $data->fetch_assoc()


            ?>

            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>?user_id=<?php echo $user_id; ?>" method="POST">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input name="name" class="form-control" type="text" value="<?php echo $single_data['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input name="uname" class="form-control" type="text"
                            value="<?php echo $single_data['uname']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" class="form-control" type="text"
                            value="<?php echo $single_data['email']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Age</label>
                        <input name="age" class="form-control" type="number" value="<?php echo $single_data['age']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">password</label>
                        <input name="password" class="form-control" type="password"
                            value="<?php echo $single_data['pass']; ?>">
                    </div>

                    <div class="form-group">
                        <input name="submit" class="btn btn-success" type="submit" value="Update">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a href="dashboard.php">All User</a>
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