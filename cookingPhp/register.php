<?php
include 'config.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    $user_type = $_POST['user_type'];

    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('Query Failed');

    if(mysqli_num_rows($select_users) > 0){
        $message[] = 'User already exist!';
    }
    else{
        if($pass != $cpass){
        $message[] = 'Password not matched!';
        }
        else{
            mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type')") or die('Query Failed');
            $message[] = 'Registration Successful!';
            header('location:login.php');
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!--CSS-->
<link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php
        if(isset($message)){
            foreach($message as $message)
            echo ' 
        <div class="message">
        <span>'.$message.'</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>';
        }
    ?>


    <div class="form-container">
        <form action="" method="post">
            <!--Register form-->
            <h3>Register Now</h3>
            <input type="text" name="name" placeholder="Enter your name" class="box" required>
            <input type="email" name="email" placeholder="Enter your email" class="box" required>
            <input type="password" name="password" placeholder="Enter your password" class="box" required>
            <input type="password" name="cpassword" placeholder="Confirm your password" class="box" required>
            <select name="user_type" class="box">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <input type="submit" name="submit" value="register now" class="btn">
            <p>Already have an account? <a href="login.php">login</a></p>
        </form>
    </div>


</body>
</html>