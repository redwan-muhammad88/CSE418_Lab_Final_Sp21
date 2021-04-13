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

	if (isset($_POST['submit'])) {

		// get form data
		$name = $_POST['name'];
		$uname = $_POST['uname'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$password = $_POST['password'];




		if (empty($name)  || empty($uname) || empty($email) || empty($password)) {
			echo "<p class='alert alert-danger w-50 mx-auto'>Field must not be Empty !</p>";
		} else {
			$sql = "INSERT INTO users_reg(name, uname, email, age, pass, status) VALUES ('$name','$uname','$email', '$age ', '$password', 'Active')";
			$conn->query($sql);


			echo "<p class='alert alert-success w-50 mx-auto'> Registration Successfull !</p>";
		}
	}


	?>

    <div class="log w-50 mx-auto mt-2 shadow">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Sign Up</h2>
            </div>
            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input name="name" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">User Name</label>
                        <input name="uname" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" class="form-control" type="text">
                    </div>

                    <div class="form-group">
                        <label for="">Age</label>
                        <input name="age" class="form-control" type="number">
                    </div>

                    <div class="form-group">
                        <label for="">password</label>
                        <input name="password" class="form-control" type="password">
                    </div>

                    <div class="form-group">
                        <input name="submit" class="btn btn-success" type="submit" value="Sign Up">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a href="index.php">Sign In now</a>
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