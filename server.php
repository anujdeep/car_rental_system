<?php 
    session_start();
    $email="";
    $pass1="";
    $pass2="";
$db=mysqli_connect('localhost:3308','root','','caruser') or 
    die("could not connect to db");
$errors=array();
//signup user
if(isset($_POST['signup'])){
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $pass1=mysqli_real_escape_string($db,$_POST['pass1']);
    $pass2=mysqli_real_escape_string($db,$_POST['pass2']);
        if(empty($email)){
        array_push($errors,"email is required");
    }
    if(empty($pass1)){
        array_push($errors,"password is required");
    }
    if($pass1!=$pass2){
        array_push($errors,"password do not match");
    }
    $user_check="select * from user where email='$email' limit 1";
    $results=mysqli_query($db,$user_check);
    $user=mysqli_fetch_assoc($results);
    if($user){
        if($user['email']===$email){
            array_push($errors,"email is already registered");
        }
    }
        if(count($errors)==0){
        $pass=$pass1;
        $query="insert into user (email,password) values ('$email','$pass')";
        mysqli_query($db,$query);
        $_SESSION['email']=$email;
        $_SESSION['success']="you are now logged in";
        header('location:enter.php');
        }
    
}


// LOGIN USER
if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $pass = mysqli_real_escape_string($db, $_POST['pass1']);

  if (empty($email)) {
  	array_push($errors, "Username is required");
  }
  if (empty($pass)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($pass);
  	$query = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: enter.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
//book cab
$book_msg="";
if(isset($_POST['book_btn'])){
    $book_msg="<div>You have successfully booked a cab with us.</div>
    <div>It will be soon at your door step</div>";
}


















?>