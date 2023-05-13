<?php 
    // Start the session
    session_start();
    include_once "../connection.php";
    $name = $_POST["name"];
    $check_box = $_POST["terms"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $retype_password = $_POST["retype_password"];
    $_SESSION["retype_password"]="";
    $_SESSION["nhap_all"]="";
        if($name!=""|| $email!="" || $password!="" || $check_box=="agree")
    {
    if($password==$retype_password){
        $sql = "SELECT * FROM account";
        $query = mysqli_query($mysqli,$sql);
        $count = 1;
        while($row = mysqli_fetch_array($query))
        {   
            if($row["username"]==$email)
            {
                $_SESSION["retype_password"]="Email đã tồn tại!";
                $count -=1;
                break;
                header("Location: ../../view/dang_ky.php");
            }
            if($count)
            {
                $sql1 = "INSERT INTO account(username,password,name) VALUES('$email',"."'$password',"."'$name')";
                $query1 = mysqli_query($mysqli,$sql1);
                $mysqli->close();
                header("Location: ../../view/home.php");
            }      
        }       
    }
    else {
        $_SESSION["retype_password"]="password and retype_password không giống nhau";
        header("Location: ../../view/dang_ky.php");
    }
}
else{
    $_SESSION["nhap_all"]="Phải nhập đủ tất cả các trường!";
    header("Location: ../../view/dang_ky.php");
}
?>