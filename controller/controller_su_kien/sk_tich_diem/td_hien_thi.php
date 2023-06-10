<!-- Kết nối CSDL -->
<?php
include "td_pages.php";

?>
<style>
.tab-bar {
    margin-top: 10px;
    margin-left: 10px;
}

.tab-bar a {
    text-align: center;
    display: inline-block;
    width: 16%;
    padding: 12px;
    border: none;
    background-color: #d3cff1;
    cursor: pointer;
    border-top-left-radius: 30px;
    border-top-right-radius: 30px;
    color: white;
    text-decoration: none;
}

.tab-bar a.active {
    background-color: #5ca1ec;
}
</style>
<!-- Hien thi bang -->

<div class = "td__div--hienthi">
    <div class = "td__div--hienthi--bocHoiVien">
    <div class="td__div--chua-hien-thi">
    <nav class="sk__menu">
    <ul class="sk__menu-header">
        <li><a style='background-color:#a1b8e1' href="../su_kien_khuyen_mai/sk_khuyen_mai_hoi_vien.php">Sự kiện khuyến mãi</a></li>
        <li><a style='background-color:#a1b8e1' href="../sinh_nhat_hoi_vien/sk_sinh_nhat_hoi_vien.php">Sinh nhật hội viên</a></li>
        <li><a href="../sk_tich_diem/sk_tich_diem.php">Tích điểm</a></li>
    </ul>
</nav>

    <!-- <div class="td__div--thanhngan"></div> -->
    <div class = "td__div--chuatable">
    <table class="td__table--hienthi" >
        <tr class="td__table_row--hienthi td__table--Tieu_de" style="background-color: #4472C8">
            <th>ID Gift</th>
            <th>Tên Gift</th>
            <th>Điểm Cần</th>
            <th>Ngày bắt đầu</th>
            <th>Số lượng</th>
            <th>Ảnh Gift</th>
        </tr>
        <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
        <tr align="center" class='td__table_row--hienthi'>
            <td  class="td__table_td--hienthi-td"><?php echo $row["id_gift"]?></td>
            <td  class="td__table_td--hienthi-td"><?php echo $row["name"]?></td>
            <td  class="td__table_td--hienthi-td"><?php echo $row["diem"]?></td>
            <td  class="td__table_td--hienthi-td"><?php echo $row["time_start"]?></td>
            <td  class="td__table_td--hienthi-td"><?php echo $row["so_luong"]?></td>
            <td  class="td__table_td--hienthi-td "><img src="<?php echo $row['image'] ?>" alt="Gift Image" class="td__table_img--gift"></td>
      <?php }
        ?>    
    </table>
    <form class="td__form--page" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <center>
        <?php
    echo $listPages;
    ?>
                    </center>
                </form>
            </div>
        </div>
        <div class="td__div--hienthi--bocQuaTang">
            <div class="tddiv--quatang">
                <?php 
                $sqlquatang = "Select * from tbl_qua_tang";
                $queryquatang = mysqli_query($mysqli,$sqlquatang);
                while($quatangs = mysqli_fetch_array($queryquatang))
                {
        ?>
                <div class="td__div__div_quatang">
                    <div class="td__div__div_quatang--image">
                        <img src="<?php echo $quatangs['image']?>" class="td__div__div_quatang__form--showimg">
                        <!-- <input class="td__div__div_quatang__form--chooseimg" type="file" accept="image/*"> -->

                    </div>
                    <div class="td__div__div_quatang-baoDong">
                        <div class="td__div--showGift">
                            <!-- <form action="../controller/controller_su_kien/sk_tich_diem/td_delete_gift.php" class="td__form--gift" method="POST"> -->
                            <label for="">ID:</label>
                            <input class="td__div__input--gift" type="text" value="<?php echo $quatangs['id_gift']?>"
                                disabled style="background-color:#b4c7E7;border:#b4c7E7">
                            <a class="td__div__a-xoaGift"
                                href="../../../controller/controller_su_kien/sk_tich_diem/td_delete_gift.php?idGift=<?php echo $quatangs['id_gift']?>">Xóa</a>
                            <a class="td__div__a-updateGift"
                                href="../../../view/views_su_kien/sk_tich_diem/view_gift_popup_update.php?idGift=<?php echo $quatangs['id_gift']?>">Sửa</a>
                        </div>
                        <div class="td__div--showGift">
                            <label for="">Tên:</label>
                            <input
                                class="td__div__input--gift td__div__input--gift--name<?php echo $quatangs['id_gift']?>"
                                type="text" value="<?php echo $quatangs['name']?>" disabled
                                style="background-color:#b4c7E7;border:#b4c7E7">
                        </div>
                        <div class="td__div--showGift">
                            <label for="">Điểm cần:</label>
                            <input
                                class="td__div__input--gift td__div__input--gift--diem<?php echo $quatangs['id_gift']?>"
                                type="text" value="<?php echo $quatangs['diem']?>" disabled
                                style="background-color:#b4c7E7;border:#b4c7E7">
                        </div>
                        <div class="td__div--showGift">
                        <label for="">Ngày bắt đầu:</label>
                        <input class="td__div__input--gift td__div__input--gift--time_start<?php echo $quatangs['id_gift']?>" type="date" value="<?php echo $quatangs['time_start']?>" disabled style="background-color:#b4c7E7;border:#b4c7E7">
                        </div>
                        <div class="td__div--showGift">
                        <label for="">Số lượng tồn:</label>
                        <input class="td__div__input--gift td__div__input--gift--so_luong<?php echo $quatangs['id_gift']?>" type="text" value="<?php echo $quatangs['so_luong']?>" disabled style="background-color:#b4c7E7;border:#b4c7E7">
                        </div> 
                        </form>
                    </div>
                </div>
                <?php
        }?>
            </div>
        </div>
        <!-- <div class="snhv__div--thanhDoc"></div> -->
        <!-- tạo giao diện nút thêm, sửa, xóa -->
        <div class='snhv__div--chua_button-all'>

            <div class='snhv__div--chua_button'>
                <button class='snhv__div--button js-guiSMS' type="button" onclick="">Gửi SMS <i
                        class="fa-solid fa-envelope"></i></button>
                <form class="snhv__form--sendDate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                    method="POST">

                    <input class='snhv__div--button js-chonNgay' name="snhv_chonNgay" type="date">
                    <button class="snhv__table--button_guiDate" type="Submit" onclick="">Search</button>


                </form>
            </div>

            <div class='snhv__div--chua_button-gift'>
                <!-- <div class="snhv__div--search--sort">
    <form class="snhv__form--search" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <div class="snhv__form__div--search">
            <button class='snhv__input--search' type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <input class='snhv__input--search' type="text" name="snhv__input--search" placeholder="Search....">
        </div>
 <div class="td__div--thanhDoc"></div> -->
            <!-- tạo giao diện nút thêm, sửa, xóa -->
            <div class='td__div--chua_button-all'>

    <div class='td__div--chua_button'>
    <div class='td__div--chua_button--sua-gui'>
        <button class='td__div--button js-sua' type="button" onclick="">Sửa</button></div>
    <form  class = "td__form--sendDate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

            <input class='td__div--button js-chonNgay' name="td_chonNgay" type="date" >
               <button class="td__table--button_guiDate" type="Submit"  onclick="" >Search</button>
                     
        
    </form>
    </div> 
                <button class='snhv__div--button js-them' type="button" onclick="">Thêm</button>


            </div>

        </div>

    </div>


    <?php
$mysqli -> close();
?>
    <script src="../../assets/js/js_su_kien/sinh_nhat_hoi_vien/snhv_gioi_han_gift.js"></script>
    <script src="../../assets/js/js_su_kien/sinh_nhat_hoi_vien/snhv_sx_gift.js"></script>