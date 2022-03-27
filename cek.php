    <?php 
        session_start();
        if(isset($_POST['masuk'])){
 
            $username = $_POST['username'];
            $password_kamu = $_POST['password_kamu'];
 
            if($username == 'user'){
 
                if($password_kamu == 'user'){
 
                    $_SESSION['user'] = $username;
                    header('location: formuser1.php');
 
                }else{
                    header("location:index.php?pesan=gagal");
                }

                }else if($username == 'admin'){
 
                    if($password_kamu == 'admin'){
     
                        $_SESSION['admin'] = $username;
                        header('location: formuser2.php');
     
                    }else{
                        header("location:index.php?pesan=gagal");
                    }
 
            }else{
                header("location:index.php?pesan=gagal");
            }
        }
 
     ?>
