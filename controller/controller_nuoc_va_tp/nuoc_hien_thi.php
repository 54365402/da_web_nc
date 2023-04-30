<!-- Kết nối CSDL -->
<?php
    include "nuoc_pages.php";
?>

<!-- Hien thi bang -->

<div class = "nuoc__div--hienthi">
<div  class='nuoc__div--tap'>
    <li class="nuoc__div nuoc__div--tnuoc"><a href="../view/nuoc.php">Nước</a></th></li>
    <li class="nuoc__div nuoc__div--ttpcn"><a href="../view/thuc_pham_chuc_nang.php">Thực phẩm chức năng</a></li>
</div>
    <table class="nuoc__table--hienthi">
        <tr class="nuoc__table_row--hienthi nuoc__table--Tieu_de">
            <th>ID Nước</th>
            <th>TÊN</th>
            <th>LOẠI</th>
            <th>GIÁ BÁN</th>
            <th>GIÁ NHẬP</th>
            <th>SỐ LƯỢNG NHẬP</th>
            <th>SỐ LƯỢNG TỒN</th>
            <th>NHÀ CUNG CẤP</th>
            <th>NGÀY NHẬP</th>
            <th>NGÀY HẾT HẠN</th>
            <th>TỔNG TIỀN</th>
        </tr>
        <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
        <tr class='nuoc__table_row--hienthi'>
            <td  class="nuoc__table_td--hienthi-td"><?php echo $row["id_nuoc_va_tp"]?></td>
            <td  class="nuoc__table_td--hienthi-td"><?php echo $row["name"]?></td>
            <td  class="nuoc__table_td--hienthi-td"><?php echo $row["loai_tp"]?></td>
            <td  class="nuoc__table_td--hienthi-td"><?php echo $row["gia_ban"]?></td>
            <td  class="nuoc__table_td--hienthi-td"><?php echo $row["gia_nhap"]?></td>
            <td  class="nuoc__table_td--hienthi-td"><?php echo $row["so_luong_nhap"]?></td>
            <td  class="nuoc__table_td--hienthi-td"><?php echo $row["so_luong_ton"]?></td>
            <td  class="nuoc__table_td--hienthi-td"><?php echo $row["nha_cung_cap"]?></td>
            <td  class="nuoc__table_td--hienthi-td"><?php echo $row["ngay_nhap"]?></td>
            <td  class="nuoc__table_td--hienthi-td"><?php echo $row["ngay_het_han"]?></td>
            <td  class="nuoc__table_td--hienthi-td"><?php echo $row["tong_tien"]?></td>
        <?php
       }
        ?>    
    </table>
    <!-- tạo giao diện nút thêm, sửa, xóa -->
    <div class='nuoc__div--chua_button'>
    <button class='nuoc__div--button js-them' type="button" onclick="">Thêm</button>
    <button class='nuoc__div--button js-sua' type="button" onclick="">Cập nhập</button>
    <button class='nuoc__div--button js-xoa nuoc__div--button_xoa' type="button" onclick="">Xóa</button>    
    </div>

</div>
<script src='../controller/controller_nuoc_va_tp/tap.js' ></script>
<?php
$mysqli -> close();
?>