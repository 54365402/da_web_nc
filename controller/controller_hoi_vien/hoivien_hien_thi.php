<!-- Kết nối CSDL -->
<?php
    include "../controller/connection.php";
    $sql = "SELECT * FROM tbl_hoi_vien ORDER BY id_hv DESC";
    $query = mysqli_query($mysqli,$sql);
?>
<link rel="stylesheet" href="./assets/css/hoivien.css">

<!-- Hien thi bang -->
<div class="main-hoivien">
    <div class="hoivien__search-view">
        <h2 class="hoivien__search-heading">Hội Viên</h2>
        <div class="hoivien__search-input">
            <i class="fa-sharp fa-solid fa-magnifying-glass hoivien__search-input--icon"></i>
            <input type="text" placeholder="Tìm Kiếm">
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
        <!-- tạo giao diện nút thêm, sửa, xóa -->
        <div class="hoivien__AFD">
            <button class='hoivien__AFD-btn js-add' type="button" onclick="">Thêm</button>
            <button class='hoivien__AFD-btn js-fix' type="button" onclick="">Cập nhập</button>
            <button class='hoivien__AFD-btn js-del hoivien__AFD-btn-del' type="button" onclick="">Xóa</button>
        </div>
    </div>
</div>
<?php
$mysqli -> close();
?>