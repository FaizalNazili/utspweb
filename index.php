<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Login Page Template - W3jar.Com</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
    <div class="main-container">
        <div class="form-container">
            <div class="form-body">
                <h2 class="title">Log in with</h2>

                <form action="cek.php" method="POST" class="the-form">

                    <label for="username">Username</label>
                    <input type="text" name="username" id="text" placeholder="Username">

                    <label for="password">Password</label>
                    <input type="password" name="password_kamu" id="password" placeholder="password">

                    <input type="submit" name="masuk" value="login">

                </form>

            </div><!-- FORM BODY-->

            <div class="form-footer">
                <div>
                    <span>Don't have an account?</span> <a href="">Sign Up</a>
                </div>
            </div><!-- FORM FOOTER -->

        </div><!-- FORM CONTAINER -->
    </div>

</body>
</html>