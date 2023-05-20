<!-- Kết nối CSDL -->
<?php
    include "class_pages.php";

?>

<!-- Hien thi bang -->

<div class = "class_div-hienthi">
    <div class = "class_div-hienthi1">
        <table>
            <div  class='class_div-tap'>
                <li class="class_div class_div-class"><a href="../view/class.php">Class</a></th></li>
                <li class="class_div class_div-personal"><a href="../view/personal.php">Personal</a></li>
            </div>
            <!-- tạo giao diện nút thêm, sửa, xóa -->
            <div class='class_div-chua_button'>
                <button class='class_div-button js-them ' type="button" onclick="">Thêm</button>
                <button class='class_div-button js-sua' type="button" onclick="">Sửa</button>
                <button class='class_div-button js-xoa class_div-button_xoa' type="button" onclick="">Xóa</button>    
            </div>  
        </table>   
    </div>

    <div class = "class_div-hienthi2">
        <!-- tạo giao diện sắp xếp -->
            <div class="class_div-search-sort">
                <form class="class_form-search" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                    <div class="class_form_div-search">
                        <button class='class_input-search' type="submit"><i class="fa-solid fa-magnifying-glass class_search-input-icon"></i></button>
                        <input class='class_input-search' type="text" name="class_input-search" placeholder="Search....">
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
                        <input class="class-sort" type="submit" value="Tìm kiếm"></form>
                    </div>
                </form>
            </div>
        <table class="class_table-hienthi">
            <tr class="class_table_row-hienthi class_table-Tieu_de" style="background-color: #4472C8">
                <th>ID Class</th>
                <th>Tên lớp</th>
                <th>Gói tập</th>
                <th>Thời lượng(h)</th>
                <th>Ngày hoạt động</th>
                <th>Sĩ số lớp</th>
                <th>Teacher</th>
                <th>ID Nhân viên</th>
                <th>Doanh thu(m)</th>
            </tr>
            <?php

            // Duyệt qua các phẩn từ trong bảng
            while($row = mysqli_fetch_array($query))
        {
            ?>
            <tr class='class_table_row-hienthi'>
                <td  class="class_table_td-hienthi-td"><?php echo $row["id_class"]?></td>
                <td  class="class_table_td-hienthi-td"><?php echo $row["ten_lop"]?></td>
                <td  class="class_table_td-hienthi-td"><?php echo $row["packages"]?></td>
                <td  class="class_table_td-hienthi-td"><?php echo $row["thoi_luong"]?></td>
                <td  class="class_table_td-hienthi-td"><?php echo $row["ngay_hoat_dong"]?></td>
                <td  class="class_table_td-hienthi-td"><?php echo $row["so_luong_hv"]?></td>
                <td  class="class_table_td-hienthi-td"><?php echo $row["name"]?></td>
                <td  class="class_table_td-hienthi-td"><?php echo $row["id_nv"]?></td>
                <td  class="class_table_td-hienthi-td"><?php echo $row["doanh_thu"]?></td>
            <?php
        }
            ?>    
        </table>
    </div>
</div>
    <?php
        $mysqli -> close();
    ?>  