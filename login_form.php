
<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['submit']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);
        if ($row['user_type'] == 'admin') {
            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php'); 
        } else if ($row['user_type'] == 'user') {
            $_SESSION['user_name'] = $row['name'];
            header('location:user_page.php');
        } 
    } else {
        $error[] = "Incorrect e-mail or password!";
    }
    
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form action="" method='post'>
            <h3>Login Now</h3>
            <?php
            
                if(isset($error)) {
                    foreach($error as $error) {
                        echo '<span class="error.msg">'.$error.'</span>';
                        
                    }
                };

            ?>
            <input type="email" name='email' required placeholder='Enter your email'>
            <input type="password" name='password' required placeholder='Enter your password'>
            <input type="submit" name='submit' value='Register Now' class='form-btn'>
            <p>Don't have an account? <a href="registration_form.php">Register Now!</a></p>

        </form>
    </div>
</body>
</html>