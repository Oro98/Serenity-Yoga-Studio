<?php require 'connection.php' ?>
<?php

    session_start();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rememberMe = $_POST['remember_me'];

        if(empty($username) || empty($password)) {
            $_SESSION['error'] = 'Username and password are required';
            header('Location: login.php');
            exit;
        }

        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = $conn->query($query);

        if($result->num_rows == 1) {
            $user = $result->fetch_assoc();

            if(md5($password) == $user['password']) {
                $_SESSION['user_id'] = $user['id'];

                if($rememberMe) {
                    setcookie('user_id', $user['id'], time() + (86400 * 30), "/");
                }

                header('Location: index.php');

            } else {
                $_SESSION['error'] = 'Invalid username or password';
                header('Location: login.php');
                exit;
            }
        } else {
            $_SESSION['error'] = 'Invalid username or password';
            header('Location: login.php');
            exit;
        }
    }

    $conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
			<form method="post" action="login.php">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" name="username" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" name="remember_me" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="register.php">No account? Click here</a>
				</div>
			</form>

		</div>
	</div>
</div>

    <script type="text/javascript" src="login.js"></script>
</body>
</html>