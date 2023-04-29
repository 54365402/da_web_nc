<!-- Kết nối CSDL -->
<?php
    include "../controller/connection.php";
    $nuoc_orderBy =" id_nuoc_va_tp";
    $nuoc_orderBy = $_POST['nuoc_orderBy'];
    echo $nuoc_orderBy;
    $sql = "SELECT * FROM tbl_nuoc_va_thuc_pham ORDER BY '".$nuoc_orderBy."' DESC";
    $query = mysqli_query($mysqli,$sql);
?>

<!-- Hien thi bang -->
<div class = "nuoc__div--hienthi">
    <table class="nuoc__table--hienthi">
        <tr class='nuoc__table_row--hienthi'>
            <th class='nuoc__table--pass'></th>
            <th class='nuoc__table--pass_tap'><a href="#">Nước</a></th>
            <th class='nuoc__table--pass_tap'><a href="">Thực phẩm chức năng</a></th>
        </tr>
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
            <td  class="nuoc__table_td--hienthi-td"><?php echo $row["id_nuoc_va_tp"]?><?php $a = $row["id_nuoc_va_tp"]?></td>
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
<?php
$mysqli -> close();
?>