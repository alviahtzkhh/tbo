<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email" >
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">LOGIN</p>
			<div class="input-group">
				<input type="text" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Password" name="password" required>
			</div>
			<div class="input-group">
				<button name="submit" class="button">Login</button>
			</div>
		</form>
        <br><center>
        <?php
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            if(preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", $email)){
                echo 'Email valid' ;
            } else {
                echo 'Email tidak valid !';
            }
        } 
        ?>
        <br><br>
        <?php
        if(isset($_POST['submit'])){
            $password = $_POST['password'];
            if(preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&.-_])[A-Za-z\d@$!%*?&.-_]{8,}$/", $password)){
                echo 'Password valid';
            } else {
                echo 'Password harus mengandung huruf besar, huruf kecil, angka, karakter khusus dengan minimal karakter 8';
            }
        }
        ?>
       </center>
	</div>
</body>
</html>