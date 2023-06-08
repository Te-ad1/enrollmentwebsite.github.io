<?php
@include 'config.php';
session_start();
if(isset($_POST['submit'])){

   
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    
    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        
        if($row['user_type'] == 'admin'){
            $_SESSION['admin_name'] = $row['name'];
            header('location:admin_page.php');

        }elseif($row['user_type'] == 'student'){
            $_SESSION['user_name'] = $row['name'];
            header('location:student_page.php');
        }

}else{
    $error[] = 'incorrect email or password!';
}
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    
<div class="form-container">
    <form action="" method="post">
       
        <h3>Login now</h3>  
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
        <input type="text" name="email" required placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="submit" name="submit" value="login now" class="form-btn">
        <p>don't have an account? <a href="register_form.php">Register now</a></p>
        

    </form>


</div>

<style>
    .form-container{    
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px; 
    background-image: linear-gradient(rgba(4,9,30,0.5),rgba(4,9,30,0.5)),url("img/backgroundpic.png");   
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
    
}
</style>
    
</body>
</html>