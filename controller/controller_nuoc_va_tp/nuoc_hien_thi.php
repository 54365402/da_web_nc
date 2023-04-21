<!-- Kết nối CSDL -->
<?php
    include "../controller/connection.php";
    $sql = "SELECT * FROM tbl_nuoc_va_thuc_pham ORDER BY id_nuoc_va_tp DESC";
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
        <tr class='nuoc__table_row--hienthi nuoc__table--Tieu_de'>
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
            <td><?php echo $row["id_nuoc_va_tp"]?></td>
            <td><?php echo $row["name"]?></td>
            <td><?php echo $row["loai_tp"]?></td>
            <td><?php echo $row["gia_ban"]?></td>
            <td><?php echo $row["gia_nhap"]?></td>
            <td><?php echo $row["so_luong_nhap"]?></td>
            <td><?php echo $row["so_luong_ton"]?></td>
            <td><?php echo $row["nha_cung_cap"]?></td>
            <td><?php echo $row["ngay_nhap"]?></td>
            <td><?php echo $row["ngay_het_han"]?></td>
            <td><?php echo $row["tong_tien"]?></td>
        <?php
       }
        ?>
        
    </table>
</div>
<?php
$mysqli -> close();
?>