<?php

include ('inc/connections.php');
if(isset($_POST['submit'])){
    $username = stripcslashes(strtolower($_POST['username']));
    $email = stripcslashes($_POST['email']);
    $password = stripcslashes($_POST['password']);

    if(isset($_POST['birthday_month']) && isset($_POST['birthday_day']) && isset($_POST['birthday_year'])){
    
        $birthday_month = (int)$_POST['birthday_month'];
        $birthday_day = (int)$_POST['birthday_day'];
        $birthday_year= (int)$_POST['birthday_year'];
        $birthday = htmlentities(mysqli_real_escape_string($conn,$birthday_month.'-'.$birthday_day.'-'.$birthday_year));
}

$username = htmlentities(mysqli_real_escape_string($conn,$_POST['username']));
$email=     htmlentities(mysqli_real_escape_string($conn,$_POST['email']));
$password=  htmlentities(mysqli_real_escape_string($conn,$_POST['password']));
$md5_pass = md5($password);

if(isset($_post['gender'])){ 
    $gender = ($_POST['gender']);
    $gender = htmlentities(mysqli_real_escape_string($conn,$_POST['gender']));
    if(in_array($gender,['male', 'female'])){ 
        $gender_error = 'please chose gender not a text ! <br>';
        $err_s = 1;
        
    }       
 }
$check_user = "SELECT * FROM 'users' WHERE username = '$username'";
$check_result = mysqli_query($conn,$check_user);
$num_rows = mysqli_num_rows($check_result);
if($num_rows !=0){
    $user_error = 'sorry username already exist, change another one <br>';
    $err_s = 1;
}






if (empty($username)) {
    $user_error = 'please enter username <br>';
    $error_s = 1;
}
elseif(strlen($username)<6)
    $user_error = 'your username needs to have a minimum of 6 letters <br>';
}
elseif(filter_var($username,FILTER_VALIDATE_INT)){
    $user_error='Your username can/t be only numbers! <br>';
}

if(empty($email)) {
    $email_error = 'please insert email <br>';
    $err_s = 1;
}

elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
    $email_error = 'please a valid emil <br>';
    $err_s = 1;
 }

 if(empty($gender)){
    $gender_error = 'please chose gender <br>';
}

if(empty($birthday)){ 
$birthday_error = 'Please insert date of birthday <br>';
$err_s = 1;
}

if(empty($password)){
    $pass_error = 'please insert password <br>';
    $err_s = 1;
    include('signup.php');
}

elseif(strlen($password) < 8 ){
    $password_error = 'your password needs to have minimum 8 letters <br>';
    $err_s = 1;
    include('signup.php');
}

else{
    if(($err_s == 0) && ($num_rows == 0)){
        $sql = "INSERT INTO users(username,email,password,birthday,gender,md5_pass)
        VALUES ('$username','$email','$password','$birthday','$gender','$md5_pass' )";
        mysqli_query($conn,$sql);
        header('location:login.php');    
}
else{
    include('signup.php');
}
}

?>