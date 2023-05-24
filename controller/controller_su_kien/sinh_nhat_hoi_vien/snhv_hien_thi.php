
<!-- Kết nối CSDL -->
<?php
include "snhv_pages.php";

?>

<!-- Hien thi bang -->

<div class = "snhv__div--hienthi">
    <div class="snhv__div--chua-hien-thi">
    <div  class='snhv__div--tap'>
        <li class="snhv__div snhv__div--skkm"><a >Sự kiện khuyến mại</a></th></li>
        <li class="snhv__div snhv__div--snhv"><a >Sinh nhật hội viên</a></th></li>
        <li class="snhv__div snhv__div--tichDiem"><a >Tích điểm</a></th></li>
        
    </div>
    <div class="snhv__div--thanhngan"></div>
    <div class = "snhv__div--chuatable">
    <table class="snhv__table--hienthi" >
        <tr class="snhv__table_row--hienthi snhv__table--Tieu_de" style="background-color: #4472C8">
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
        <tr align="center" class='snhv__table_row--hienthi'>
            <td  class="snhv__table_td--hienthi-td"><?php echo $row["id_hv"]?></td>
            <td  class="snhv__table_td--hienthi-td"><?php echo $row["ten_hv"]?></td>
            <td  class="snhv__table_td--hienthi-td"><?php echo $row["diem_tich_luy"]?></td>
            <td  class="snhv__table_td--hienthi-td"><?php echo $row["ngay_sinh"]?></td>
            <td  class="snhv__table_td--hienthi-td"><?php echo $row["id_gift"]?></td>
            <td  class="snhv__table_td--hienthi-td"><?php 
            if($row["trang_thai"]==1)
            {
                echo "Đã gửi quà";
            }
            else{echo "Chưa gửi quà";}?></td>
        <?php
       }
        ?>    
    </table>
    <form class="snhv__form--page" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <center>
        <?php
    echo $listPages;
    ?>
    </center>
</form>
</div>
<div class="snhv__div--quatang">
    <div class="snhv__div__div_quatang">
        
        </div>
        <div class="snhv__div__div_quatang">
            
            </div>
            <div class="snhv__div__div_quatang">
                
                </div>
            </div>
<div class="snhv__div--thanhDoc"></div>
            <!-- tạo giao diện nút thêm, sửa, xóa -->
            <div class='snhv__div--chua_button-all'>

    <div class='snhv__div--chua_button'>
    <button class='snhv__div--button js-guiSMS' type="button" onclick="">Gửi SMS <i class="fa-solid fa-envelope"></i></button>
    <input class='snhv__div--button js-chonNgay' name="snhv_chonNgay" type="date" ></input>
    </div>
       
    <div class='snhv__div--chua_button-gift'>
    <button class='snhv__div--button js-them' type="button" onclick="">Thêm</button>
    <button class='snhv__div--button js-sua' type="button" onclick="">Sửa</button>
    <button class='snhv__div--button js-xoa' type="button" onclick="">Xóa</button>
    </div>

    </div>

    </div>
    
</>

<?php
$mysqli -> close();
?>
