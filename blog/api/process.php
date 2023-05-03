<?php
session_start();

include "./db.php";
?>

<?php
// REGISTER USER
if (isset($_POST['save_user'])) {
    $name= $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmpass'];
    $username = $_POST['username'];
    $dates = date("Y-m-d H:i:s");
    
    



    // confirming pass & confrirm pass matches.
    if ($password !== $confirmpass) {
        exit("<p>password do not match</p><a href='signup.html'>Go back</a</p>");
    }

    // checking if email already exist
    $email_exist = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($email_exist) > 0) {
        exit("<p>email already exist</p><a href='login.html'>login</a>");

    }

    //   checking if username already exist
    $username_exist = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username'");
    if (mysqli_num_rows($username_exist) > 0) {
        exit("<p>User name already exist</p><a href='signup.html'>Go back</a>");

    }

    // encrypting password
    $cryptic_pass = md5($password);


    // inserting data into database.
    $insert_user = mysqli_query($connect, "INSERT INTO users(name, email, password, username, dates) VALUES( '$name', '$email', '$cryptic_pass', '$username', '$dates')");
    if ($insert_user) {
        header("location: ../login.html");
    }

}




// Login User
if(isset($_POST['login_user'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user_exist = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");


    // if user does not exist
    if(!mysqli_num_rows($user_exist)){
        exit("<p>User not found</p> <p><a href='../signup.html'>Sign Up</a></p> <p><a href='../login.html'>Go back</a></p>");        
    }
  
    $user_details = mysqli_fetch_assoc($user_exist);

    $cryptic_pass = md5($password);

    if($cryptic_pass !== $user_details['password']){
        exit("<p>Incorrect Password</p><a href='../login.html'>Go back</a>");
    }

    // creates a session array 
    $_SESSION["login"] = true;
    $_SESSION["id"] = $user_details['id'];

    
    header("Location: account.php");

    
}


?>