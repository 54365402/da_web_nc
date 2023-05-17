<?php
    include_once "../connection.php";
    $priceID = $_POST['priceID'];
    $g1_lan = $_POST['g1_lan'];
    $g1_thang = $_POST['g1_thang'];
    $g3_thang = $_POST['g3_thang'];
    $g6_thang = $_POST['g6_thang'];
    $g1_nam = $_POST['g1_nam'];
    $g2_nam = $_POST['g2_nam'];
    $g5_nam = $_POST['g5_nam'];
    $gym_rieng = $_POST['gym_rieng'];

    $yoga_basic = $_POST['yoga_basic'];
    $yoga_average = $_POST['yoga_average'];
    $yoga_advance = $_POST['yoga_advance'];
    $yoga_rieng = $_POST['yoga_rieng'];

    $aerobic_basic = $_POST['aerobic_basic'];
    $aerobic_average = $_POST['aerobic_average'];
    $aerobic_advance = $_POST['aerobic_advance'];
    $aerobic_rieng = $_POST['aerobic_rieng'];

    $boxing_basic = $_POST['boxing_basic'];
    $boxing_average = $_POST['boxing_average'];
    $boxing_advance = $_POST['boxing_advance'];
    $boxing_rieng = $_POST['boxing_rieng'];

    $swimming_basic = $_POST['swimming_basic'];
    $swimming_average = $_POST['swimming_average'];
    $swimming_advance = $_POST['swimming_advance'];
    $swimming_rieng = $_POST['swimming_rieng'];
    
    $sql = "UPDATE tbl_gym SET 1_lan='".$g1_lan."',1_thang='".$g1_thang."',
    gioi_tinh='".$hoivien_gioi_tinh."', tuoi='".$hoivien_tuoi."',
    sdt='".$hoivien_sdt."', cmnd='".$hoivien_cmnd."', bien_xe='".$hoivien_bien_xe."',
    diem_tich_luy='".$hoivien_diem_tich_luy."' WHERE id_hv=".$hoivienID;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
?>