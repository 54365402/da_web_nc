<!-- Kết nối CSDL -->
<?php
    include_once "../connection.php";
    $hoivienID = $_POST['hoivienID'];
    $hoivien_ten = $_POST['hoivien_ten'];
    $hoivien_ngay_sinh = $_POST['hoivien_ngay_sinh'];
    $hoivien_gioi_tinh = $_POST['hoivien_gioi_tinh'];
    $hoivien_tuoi = $_POST['hoivien_tuoi'];
    $hoivien_sdt = $_POST['hoivien_sdt'];
    $hoivien_cmnd = $_POST['hoivien_cmnd'];
    $hoivien_bien_xe = $_POST['hoivien_bien_xe'];
    $hoivien_diem_tich_luy = $_POST['hoivien_diem_tich_luy'];
    $hoivien_chieu_cao = $_POST['hoivien_chieu_cao'];
    $hoivien_can_nang = $_POST['hoivien_can_nang'];
    $hoivien_phan_tram_mo = $_POST['hoivien_phan_tram_mo'];
    if (count($_POST) === 5) {
        $sql = "UPDATE tbl_hoi_vien SET name_hv='".$hoivien_ten."', chieu_cao='".$hoivien_chieu_cao."',
        can_nang='".$hoivien_can_nang."', phan_tram_mo='".$hoivien_phan_tram_mo."' WHERE id_hv=".$hoivienID;
    } else {
        $sql = "UPDATE tbl_hoi_vien SET name_hv='".$hoivien_ten."',ngay_sinh='".$hoivien_ngay_sinh."',
              gioi_tinh='".$hoivien_gioi_tinh."', tuoi='".$hoivien_tuoi."',
              sdt='".$hoivien_sdt."', cmnd='".$hoivien_cmnd."', bien_xe='".$hoivien_bien_xe."',
              diem_tich_luy='".$hoivien_diem_tich_luy."' WHERE id_hv=".$hoivienID;
    }
    $query = mysqli_query($mysqli,$sql);
    $mysqli->close();
    header("Location: ../../view/hoivien.php");
?>