<?php
    include_once "../connection.php";

    require_once('../../model/NoticeModal.php');

    $notice = new Notice();
    $notice->set_notice($_POST["content"]);
    if(is_null($_POST["content"]))
    {
        echo '<script>alert("Notice is null")</script>';
    }
    else {
    $sql = "INSERT INTO tbl_notice(notice) VALUES('".$notice->get_notice()."')";}
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();

    header("Location: ../../view/views_home/home.php");
    exit();

?>