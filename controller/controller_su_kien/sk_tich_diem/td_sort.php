<?php
// lấy tên key
$td_get_date="";
if(isset($_POST['td_chonNgay']))
{
    $td_get_date = "'".$_POST['td_chonNgay']."'";
}
else
{
    $td_get_date = "CURDATE()";
}


?>