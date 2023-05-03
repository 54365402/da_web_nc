<?php
// lấy tên key
    if(isset($_POST['nuocTang']))
    {
        $nuoc_key = $_POST['nuocSort'];
    }
    else
    {
        $nuoc_key = 0;
    }

    if($nuoc_key==0){
        $nuoc_key="id_nuoc_va_tp";
    }
    elseif($nuoc_key==1){
        $nuoc_key="name";
    }
    else{
        $nuoc_key="gia_ban";
    }
//  tăng dần hoặc giảm dần
if(isset($_POST['nuocTang']))
    {
        $nuoc_Tang = $_POST['nuocTang'];
    }
    else
    {
        $nuoc_Tang = 0;
    }

    if($nuoc_Tang==0){
        $nuoc_Tang="DESC";
    }
    else{
        $nuoc_Tang="ASC";
    }


?>