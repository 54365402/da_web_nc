<!-- Kết nối CSDL -->
<?php
    include "NhanVienPage.php";
?>
<link rel="stylesheet" href="./assets/css/nhanvien.css">

<!-- Hien thi bang -->
<div class="main-nhanvien">
    <div class="nhanvien__search-view">
        <h2 class="nhanvien__search-heading">Nhân viên</h2>
       
        <select class="nhanvien__search-btn">
                            <option value="Gym">Gym</option>
                            <option value="Yoga">Yoga</option>
                            <option value="Aerobic">Aerobic</option>
                            <option value="Boxing">Boxing</option>
                            <option value="Swimming">Swimming</option>
        </select>
    </div>
    <div class="nhanvien__table">
        <table class="nhanvien__table-view">
            <tr class="nhanvien__table-view--title">
                <th>ID</th>
                <th>HỌ VÀ TÊN</th>
                <th>GIỚI TÍNH</th>
                <th>TUỔI</th>
                <th>SỐ ĐIỆN THOẠI</th>
                <th>CMND</th>
                <th>BIỂN SỐ XE</th>
                <th>ĐỊA CHỈ</th>
                <th>CHỨC VỤ</th>
                <th>GMAIL</th>
            </tr>
            <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
            <tr class="nhanvien__table-view--data">
                <td><?php echo $row["id_nv"]?></td>
                <td><?php echo $row["name"]?></td>
                <td><?php echo $row["gioi_tinh"]?></td>
                <td><?php echo $row["tuoi"]?></td>
                <td><?php echo $row["sdt"]?></td>
                <td><?php echo $row["cmnd"]?></td>
                <td><?php echo $row["bien_so_xe"]?></td>
                <td><?php echo $row["dia_chi"]?></td>
                <td><?php echo $row["chuc_vu"]?></td>
                <td><?php echo $row["gmail"]?></td>
                <?php
       }
        ?>
        </table>
    
        <form class="nhanvien__pagination" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <center>
                <?php echo $listPages; ?>
            </center>
        </form>

        <div class="nhanvien__search-input">
            <i class="fa-sharp fa-solid fa-magnifying-glass nhanvien__search-input--icon"></i>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <input class='nhanvien__input-search' type="text" name="nhanvien__input-search" placeholder="Tìm Kiếm">
            </form>
        </div>
        <!-- tạo giao diện nút thêm, sửa, xóa -->
        <div class="nhanvien__AUD">
            <button class='nhanvien__AUD-btn js-add' type="button" onclick="">Thêm</button>
            <button class='nhanvien__AUD-btn js-update' type="button" onclick="">Cập nhập</button>
            <button class='nhanvien__AUD-btn js-del nhanvien__AUD-btn-del' type="button" onclick="">Xóa</button>
        </div>
    </div>
</div>
<?php
$mysqli -> close();
?>

