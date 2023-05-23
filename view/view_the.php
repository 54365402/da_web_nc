<?php
    include_once "../controller/connection.php";
    $sql = "SELECT * FROM tbl_nhan_vien";
    $query = mysqli_query($mysqli,$sql);
    $sql1 = "SELECT * FROM tbl_hoi_vien";
    $query1 = mysqli_query($mysqli,$sql1);
    ?>
<div class='the_modal-popup'>
    <div class='the_modal_div-popup'>
        <i><b><u class='the_modal_div-u'>Tạo Thẻ Mới</u></b></i>
    <div >
    <form action="../controller/controller_the/the_add.php" method="POST">
        <table class='the_table-addform'>
            <!-- <tr>
                <td><label for="fname">Họ và Tên: </label></td>
                <td><input class='the_table-add_input' type="text"  name="the_table-add_ho_va_ten" placeholder="Full name...."></td>
            </tr> -->

            <tr>
                <td><label for="lname">ID hội viên:</label></td>
                <td>
                <select class='the_table-add_input1' name='the_table-add_id_hv'>
                <option value="">-- ID member --</option>
                    <?php
                    // Duyệt qua các phẩn từ trong bảng
                    while($row = mysqli_fetch_array($query1))
                        {?>
                            <option class='view_the_select-id_hv' value="<?php echo $row["id_hv"]?>"><?php echo $row["id_hv"]?></option>
                        <?php
                        }
                         ?>   
                        </select>
                        
                        </td>
                <!-- <td><input class='the_table-add_input' type="text"  name="the_table-add_id_hv" placeholder="ID member...."></td> -->
            </tr>

            <!-- <tr>
                <td><label for="lname">Card ID: </label></td>
                <td><input class='the_table-add_input' type="text"  name="the_table-add_card_id" placeholder="ID card...."></td>
            </tr> -->
            
            <tr>
                <td><label for="lname">ID nhân viên:</label></td>
                <td>
                <select class='the_table-add_input1' name='the_table-add_id_nv'>
                <option value="">-- ID staff --</option>
                    <?php
                    // Duyệt qua các phẩn từ trong bảng
                    while($row = mysqli_fetch_array($query))
                        {?>
                            <option class='view_the_select-id_nv' value="<?php echo $row["id_nv"]?>"><?php echo $row["id_nv"]?></option>
                        <?php
                        }
                         ?>   
                        </select>
                        
                        </td>
                <!-- <td><input class='the_table-add_input' type="text"  name="the_table-add_id_nv" placeholder="ID staff...."></td> -->
            </tr>
        
            <tr>
                <td><label for="lname">Gói tập: </label></td>
                <td><input class='the_table-add_input' type="text"  name="the_table-add_goi_tap" placeholder="Packages...."></td>
            </tr>
            
            <tr>
            <td><label for="lname">Số lượng: </label></td>
                <td><input class='the_table-add_input' type="text"  name="the_table-add_so_luong" placeholder="Quantity...." ></td>
            </tr>

            <tr>
            <td><label for="lname">Lớp: </label></td>
                <td>
                    <select name="the_table-add_lop" class="the_table-add_input1">
                        <option value="gym">Gym</option>
                        <option value="swimming">Swimming</option>
                        <option value="yoga">Yoga</option>
                        <option value="aerobic">Aerobic</option>
                        <option value="boxing">Boxing</option>
                    </select>
                </td>
               <!--<td><input class='the_table-add_input' type="text"  name="the_table-add_lop" placeholder="Class...."></td> -->
            </tr> 
            
            <tr>
                <td><label for="lname">Ngày bắt đầu:</label></td>
                <td><input class='the_table-add_input1' type="date"  name="the_table-add_ngay_bat_dau" placeholder="Date start...."></td>
            </tr>

            <tr>
                <td><label for="lname">Ngày kết thúc:</label></td>
                <td><input class='the_table-add_input1' type="date"  name="the_table-add_ngay_ket_thuc" placeholder="Date end...."></td>
            </tr>

            <tr>
                <td><label for="lname">Thành tiền: </label></td>
                <td><input class='the_table-add_input' type="text"  name="the_table-add_thanh_tien" placeholder="Sum money...."></td>
            </tr>
            
            <tr>
                <td colspan='2'>
                    <button class='the_table-add-button the_table-button_huy' type="button" onclick="">Hủy</button>
                    <button class='the_table-add-button the_table-button_them' type="Submit"  onclick="" >Thêm</button>
                </td>
            </tr>

        </table>
    </form>
    </div>
    </div>
</div>
<div class="clear"></div>