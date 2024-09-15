<?php require 'connection.php' ?>

<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $name = $_POST['name'];

        if(empty($username) || empty($password) || empty($confirm_password) || empty($name)) {
            $_SESSION['error'] = 'All fields are required';
            header('Location: register.php');
            exit;
        }

        if(strlen($password) < 6) {
            $_SESSION['error'] = 'Password must be at least 6 characters';
            header('Location: register.php');
            exit;
        }

        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0) {
            $_SESSION['error'] = 'Username already exists';
            header('Location: register.php');
            exit;
        }

        if($password == $confirm_password) {
            $password = md5($password);
            $query = "INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')";
            $result = mysqli_query($conn, $query);

            if($result) {
                $_SESSION['success'] = 'Account created successfully. You can now try to login';
                header('Location: login.php');
                exit;
            } else {
                $_SESSION['error'] = 'There was an error creating your account';
                header('Location: register.php');
                exit;
            }
        } else {
            $_SESSION['error'] = 'Passwords do not match';
            header('Location: register.php');
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="login-wrap">
	<div class="login-html">
        <?php if(isset($_SESSION['error'])): ?>
            <div class="error">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <?php if(isset($_SESSION['success'])): ?>
            <div class="success">
                <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>

		<div class="login-form">
			<form method="post" action="register.php">
                <div class="group">
					<label for="name" class="label">Full Name</label>
					<input id="name" type="text" name="name" class="input">
				</div>
				<div class="group">
					<label for="username" class="label">Username</label>
					<input id="username" type="text" name="username" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="repeat-pass" class="label">Repeat Password</label>
					<input id="repeat-pass" type="password" name="confirm_password" class="input" data-type="password">
				</div>

				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="login.php">Already Member?</a>
				</div>
			</form>
		</div>
	</div>
</div>

    <script type="text/javascript" src="login.js"></script>
</body>
</html>