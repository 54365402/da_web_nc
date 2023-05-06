<!-- Kết nối CSDL -->
<?php
    include "../connection.php";
    $hoivienID = $_POST['hoivienID'];
    $hoivien_ten = $_POST['hoivien_ten'];
    $hoivien_ngay_sinh = $_POST['hoivien_ngay_sinh'];
    $hoivien_gioi_tinh = $_POST['hoivien_gioi_tinh'];
    $hoivien_tuoi = $_POST['hoivien_tuoi'];
    $hoivien_sdt = $_POST['hoivien_sdt'];
    $hoivien_cmnd = $_POST['hoivien_cmnd'];
    $hoivien_bien_xe = $_POST['hoivien_bien_xe'];
    $hoivien_diem_tich_luy = $_POST['hoivien_diem_tich_luy'];
    $sql = "UPDATE tbl_hoi_vien SET name_hv='".$hoivien_ten."',ngay_sinh='".$hoivien_ngay_sinh."',
    gioi_tinh='".$hoivien_gioi_tinh."', tuoi='".$hoivien_tuoi."',
    sdt='".$hoivien_sdt."', cmnd='".$hoivien_cmnd."', bien_xe='".$hoivien_bien_xe."',
    diem_tich_luy='".$hoivien_diem_tich_luy."' WHERE id_hv=".$hoivienID;
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
?>