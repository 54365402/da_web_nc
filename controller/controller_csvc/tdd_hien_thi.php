
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
            <th>ID Máy</th>
            <th>TÊN</th>
            <th>SỐ LƯỢNG</th>
            <th>NHÀ CUNG CẤP</th>
            <th>NGÀY NHẬP</th>
            <th>GIÁ NHẬP</th>
            <th>BẢO TRÌ</th>
            <th>BẢO HÀNH</th>
            <th>CHI PHÍ BẢO TRÌ</th>
            <th>GHI CHÚ</th>
        </tr>
        <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
        <tr class='tdd__table_row--hienthi'>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["id_may"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["ten"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["so_luong"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["nha_cung_cap"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["ngay_nhap"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["gia_nhap"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["bao_tri"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["bao_hanh"]?></td>
            <td  class="tdd__table_td--hienthi-td"><?php echo $row["chi_phi_bao_tri"]?></td>
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
