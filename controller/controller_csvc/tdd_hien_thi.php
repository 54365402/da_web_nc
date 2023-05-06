
<!-- Kết nối CSDL -->
<?php
include_once "../controller/connection.php";
include "tdd_pages.php";
?>

<!-- Hien thi bang -->

<div class = "tdd__div--hienthi">
    <div  class='tdd__div--tap'>
        <li class="tdd__div tdd__div--dct"><a href="../view/dung_cu_tap.php">Dụng cụ tập</a></th></li>
        <li class="tdd__div tdd__div--tdd"><a href="../view/tu_dung_do.php">Tủ đựng đồ</a></li>
        
</div>
    <table class="tdd__table--hienthi">
        <tr class="tdd__table_row--hienthi tdd__table--Tieu_de">
            <th>ID tủ</th>
            <th>Số tủ</th>
            <th>Loại tủ</th>
            <th>Trạng thái</th>
            <th>Tên chủ</th>
            <th>ID hội viên</th>
            <th>Ngày bắt đầu</th>
            <th>Ngày kết thúc</th>
            <th>GHI CHÚ</th>
        </tr>
        <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
        <tr class='tdd__table_row--hienthi'>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["id_wardrobe"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["so_tu"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["loai_tu"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["trang_thai"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["name_hv"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["id_hv"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["time_start"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["time_end"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["ghi_chu"]?></td>

        <?php
       }
        ?>    
    </table>
    <!-- tạo giao diện nút thêm, sửa, xóa -->
    <div class='tdd__div--chua_button'>
    <button class='tdd__div--button js-them' type="button" onclick="">Thêm</button>
    <button class='tdd__div--button js-sua' type="button" onclick="">Cập nhập</button>
    <button class='tdd__div--button js-xoa tdd__div--button_xoa' type="button" onclick="">Xóa</button>    
    </div>

</div>

<?php
$mysqli -> close();
?>
