<!-- Kết nối CSDL -->
<?php
    include "hoivien_pages.php";
?>
<link rel="stylesheet" href="./assets/css/hoivien.css">

<!-- Hien thi bang -->
<div class="main-hoivien">
    <div class="hoivien__search-view">
        <h2 class="hoivien__search-heading">Hội Viên</h2>
        <div class="hoivien__search-input">
            <i class="fa-sharp fa-solid fa-magnifying-glass hoivien__search-input--icon"></i>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <input class='hoivien__input-search' type="text" name="hoivien__input-search" placeholder="Tìm Kiếm">
            </form>
        </div>
        <button class="hoivien__search-btn">
            Theo Dõi Sức Khỏe
        </button>
    </div>
    <div class="hoivien__table">
        <table class="hoivien__table-view">
            <tr class="hoivien__table-view--title">
                <th>ID</th>
                <th>HỌ VÀ TÊN</th>
                <th>NGÀY SINH</th>
                <th>GIỚI TÍNH</th>
                <th>TUỔI</th>
                <th>SỐ ĐIỆN THOẠI</th>
                <th>CMND</th>
                <th>BIỂN SỐ XE</th>
                <th>ĐIỂM TÍCH LŨY</th>
            </tr>
            <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
            <tr class="hoivien__table-view--data">
                <td><?php echo $row["id_hv"]?></td>
                <td><?php echo $row["name_hv"]?></td>
                <td><?php echo $row["ngay_sinh"]?></td>
                <td><?php echo $row["gioi_tinh"]?></td>
                <td><?php echo $row["tuoi"]?></td>
                <td><?php echo $row["sdt"]?></td>
                <td><?php echo $row["cmnd"]?></td>
                <td><?php echo $row["bien_xe"]?></td>
                <td><?php echo $row["diem_tich_luy"]?></td>
                <?php
       }
        ?>
        </table>
<<<<<<< HEAD
        
        <!-- tạo chỉ mục trang -->
=======
        <!-- bang theo doi suc khoe -->
        <table class="hoivien__table-health-view">
            <tr class="hoivien__table-view--title">
                <th>ID</th>
                <th>CHIỀU CAO</th>
                <th>CÂN NẶNG</th>
                <th>% MỠ</th>
                <th>ID PT</th>
                <th>NGÀY CẬP NHẬT</th>
            </tr>
            <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
            <tr class="hoivien__table-view--data">
                <td><?php echo $row["id_hv"]?></td>
                <td><?php echo $row["chieu_cao"]?></td>
                <td><?php echo $row["can_nang"]?></td>
                <td><?php echo $row["phan_tram_mo"]?></td>
                <td><?php echo $row["id_pt"]?></td>
                <td><?php echo $row["ngay_cap_nhap"]?></td>
                <?php
       }
        ?>
        </table>
>>>>>>> 63444144885519dda788e5b2567ddf827a23e133
        <form class="hoivien__pagination" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <center>
                <?php echo $listPages; ?>
            </center>
        </form>
        <!-- tạo giao diện nút thêm, sửa, xóa -->
        <div class="hoivien__AUD">
            <button class='hoivien__AUD-btn js-add' type="button" onclick="">Thêm</button>
            <button class='hoivien__AUD-btn js-ud' type="button" onclick="">Cập nhập</button>
            <button class='hoivien__AUD-btn js-del hoivien__AUD-btn-del' type="button" onclick="">Xóa</button>
        </div>
    </div>
</div>
<?php
$mysqli -> close();
?>
<script src="../controller/controller_hoi_vien/hoivien_change_table.js"></script>