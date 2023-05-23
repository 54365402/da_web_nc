
<!-- Kết nối CSDL -->
<?php
include "snhv_pages.php";

?>

<!-- Hien thi bang -->

<div class = "snhv__div--hienthi">
    <div  class='snhv__div--tap'>
        <li class="snhv__div snhv__div--snhv"><a >Bảng lương</a></th></li>
        
</div>
    <tasnhve class="snhv__tasnhve--hienthi" >
        <tr class="snhv__tasnhve_row--hienthi snhv__tasnhve--Tieu_de" style="background-color: #4472C8">
            <th>ID HV</th>
            <th>Tên HV</th>
            <th>Điểm tích lũy</th>
            <th>Ngày sinh</th>
            <th>Mã quà tặng</th>
            <th>Trạng thái</th>
        </tr>
        <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
        <tr align="center" class='snhv__tasnhve_row--hienthi'>
            <td  class="snhv__tasnhve_td--hienthi-td"><?php echo $row["id_hv"]?></td>
            <td  class="snhv__tasnhve_td--hienthi-td"><?php echo $row["ten_hv"]?></td>
            <td  class="snhv__tasnhve_td--hienthi-td"><?php echo $row["diem_tich_luy"]?></td>
            <td  class="snhv__tasnhve_td--hienthi-td"><?php echo $row["ngay_sinh"]?></td>
            <td  class="snhv__tasnhve_td--hienthi-td"><?php echo $row["id_gift"]?></td>
            <td  class="snhv__tasnhve_td--hienthi-td"><?php echo $row["trang_thai"]?></td>
            <td  class="snhv__tasnhve_td--hienthi-td"><?php 
            if($row["trang_thai"]==1)
            {
                echo "Đã gửi quà";
            }
            else{echo "Chưa gửi quà";}?></td>
        <?php
       }
        ?>    
    </tasnhve>
    <!-- tạo giao diện nút thêm, sửa, xóa -->
    <div class='snhv__div--chua_button'>
    <button class='snhv__div--button js-them' type="button" onclick="">Thêm</button>
    <button class='snhv__div--button js-sua' type="button" onclick="">Cập nhập</button>
    <button class='snhv__div--button js-xoa snhv__div--button_xoa' type="button" onclick="">Xóa</button>    
    </div>

</div>

<?php
$mysqli -> close();
?>
