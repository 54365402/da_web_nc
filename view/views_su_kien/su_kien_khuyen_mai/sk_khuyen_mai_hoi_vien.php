<?php
    include_once "../header.php";
?>
<link rel="stylesheet" href="../../assets/css/skkm.css">
<div class="tab-bar" style="bottom:20px;">
    <a href="../su_kien_khuyen_mai/sk_khuyen_mai_hoi_vien.php" class="tab-button active">Sự kiện khuyến mãi</a>
    <a href="../sinh_nhat_hoi_vien/sk_sinh_nhat_hoi_vien.php" class="tab-button">Sinh nhật hội viên</a>
    <a href="../sk_tich_diem/sk_tich_diem.php" class="tab-button">Tích điểm</a>
</div>
<script src="../../assets/js/js_su_kien/su_kien_khuyen_mai/xu_ly_header.js">
</script>
<?php
    include_once "../../../controller/controller_su_kien/su_kien_khuyen_mai/skkm_hien_thi.php";
?>