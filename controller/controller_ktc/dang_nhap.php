<?php 
    // Start the session
    session_start();
    include_once "../connection.php";
    $email = $_POST["email"];
    $password = $_POST["password"];
    $remeber = $_POST["remember"];
   // $remeber = $_POST["remember"];


    $sql = "SELECT * FROM account WHERE username='$email' and password='$password'";
    $total = mysqli_num_rows(mysqli_query($mysqli, $sql));
    if($total){
        $_SESSION['login'] = true;
        $_SESSION['user'] = $email;
        $_SESSION['pass'] = $password;
        $_SESSION['error_login'] = "";
       // $_SESSION['login'] = true;
    }
    else{
        $_SESSION['login'] = false;
        if ($remeber){
            $_SESSION['user'] = $email;
            $_SESSION['pass'] = $password;
        }
        else{
            $_SESSION['user'] = "";
            $_SESSION['pass'] = "";
        }
        $_SESSION['error_login'] = "User or Password wrong!";
    }

    if($_SESSION['login']){
        header("Location: ../../view/home.php");
    }
    else{
        header("Location: ../../view/dang_nhap.php");
    }
?>