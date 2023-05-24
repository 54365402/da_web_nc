
<!-- Kết nối CSDL -->
<?php
include "bl_pages.php";

?>

<!-- Hien thi bang -->

<div class = "bl__div--hienthi">
    <div  class='bl__div--tap'>
        <li class="bl__div bl__div--bl"><a >Bảng lương</a></th></li>
        
</div>
    <table class="bl__table--hienthi" >
        <tr class="bl__table_row--hienthi bl__table--Tieu_de" style="background-color: #4472C8">
            <th>IDNV</th>
            <th>Tên</th>
            <th>Time Start</th>
            <th>Số công</th>
            <th>Lương trên công</th>
            <th>Lương</th>
            <th>Trạng thái</th>
        </tr>
        <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
        <tr align="center" class='bl__table_row--hienthi'>
            <td  class="bl__table_td--hienthi-td"><?php echo $row["id_nv"]?></td>
            <td  class="bl__table_td--hienthi-td"><?php echo $row["name"]?></td>
            <td  class="bl__table_td--hienthi-td"><?php echo $row["time_start"]?></td>
            <td  class="bl__table_td--hienthi-td"><?php echo $row["so_cong"]?></td>
            <td  class="bl__table_td--hienthi-td"><?php echo $row["luong_tren_cong"]?></td>
            <td  class="bl__table_td--hienthi-td"><?php echo $row["luong"]?></td>
            <td  class="bl__table_td--hienthi-td"><?php 
            if($row["trang_thai"]==1)
            {
                echo "Đã thanh toán";
            }
            else{echo "Chưa thanh toán";}?></td>
        <?php
       }
        ?>    
    </table>
    <!-- tạo giao diện nút thêm, sửa, xóa -->
    <div class='bl__div--chua_button'>
    <button class='bl__div--button js-them' type="button" onclick="">Thêm</button>
    <button class='bl__div--button js-sua' type="button" onclick="">Cập nhập</button>
    <button class='bl__div--button js-xoa bl__div--button_xoa' type="button" onclick="">Xóa</button>    
    </div>

</div>

<?php
$mysqli -> close();
?>
