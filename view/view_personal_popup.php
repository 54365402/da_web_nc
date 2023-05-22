<?php
    include_once "../controller/connection.php";
    $sql = "SELECT * FROM tbl_nhan_vien";
    $query = mysqli_query($mysqli,$sql);
    $sql1 = "SELECT * FROM tbl_hoi_vien";
    $query1 = mysqli_query($mysqli,$sql1);
    ?>
<div class='personal_modal-popup'>
    <div class='personal_modal_div-popup'>
        <i><b><u class='personal_modal_div-u'>Thêm PT</u></b></i>
    <div >
    <form action="../controller/controller_nhan_vien/phuong_thuc_day/personal_add.php" method="POST">
        <table class='personal_table-addform'>   
            <!-- <tr>
                <td><label for="lname">ID Personal :</label></td>
                <td><input class='personal_table-add_input' type="text"  name="personal_table-add_id_personal" placeholder="ID Personal...."></td>
            </tr> -->
            <tr>
                <td><label for="lname">ID nhân viên:</label></td>
                <td>
                <select class='personal_table-add_input' name='personal_table-add_id_nv'>
                    <?php
                    // Duyệt qua các phẩn từ trong bảng
                    while($row = mysqli_fetch_array($query))
                        {?>
                            <option class='view_personal_select-id_nv' value="<?php echo $row["id_nv"]?>"><?php echo $row["id_nv"]?></option>
                        <?php
                        }
                         ?>   
                        </select>
                        
                        </td> 
                <!-- <td><input class='personal_table-add_input' type="text"  name="personal_table-add_id_nv" placeholder="ID Nhân viên...."></td> -->
            </tr>
            <<tr>
                <td><label for="lname">ID hội viên viên:</label></td>
                <td>
                <select class='personal_table-add_input' name='personal_table-add_id_hv'>
                    <?php
                    // Duyệt qua các phẩn từ trong bảng
                    while($row = mysqli_fetch_array($query1))
                        {?>
                            <option class='view_personal_select-id_hv' value="<?php echo $row["id_hv"]?>"><?php echo $row["id_hv"]?></option>
                        <?php
                        }
                         ?>   
                        </select>
                        
                        </td> 
                <!-- <td><input class='personal_table-add_input' type="text"  name="personal_table-add_id_hv" placeholder="ID Hội viên...."></td>
            </tr> -->
            <tr>
            <td><label for="lname">Thời lượng :</label></td>
                <td><input class='personal_table-add_input' type="text"  name="personal_table-add_thoi_luong" placeholder="Thời lượng...."></td>
            </tr>
            <tr>
                <td><label for="lname">Số buổi :</label></td>
                <td><input class='personal_table-add_input' type="text"  name="personal_table-add_so_buoi" placeholder="Số buổi...."></td>
            </tr>
            <tr>
                <td><label for="lname">Ngày bắt đầu:</label></td>
                <td><input class='personal_table-add_input' type="date"  name="personal_table-add_time_start" placeholder="Ngày bắt đầu...."></td>
            </tr>
            <tr>
                <td><label for="lname">Ngày kết thúc:</label></td>
                <td><input class='personal_table-add_input' type="date"  name="personal_table-add_time_end" placeholder="Ngày kết thúc...."></td>
            </tr>
            <tr>
                <td><label for="lname">Doanh thu :</label></td>
                <td><input class='personal_table-add_input' type="text"  name="personal_table-add_doanh_thu"placeholder="Doanh thu...."></td>
            </tr>
            <tr>
                <td colspan='2'>
                    <button class='personal_table-add-button personal_table-button_huy' type="button" onclick="">Hủy</button>
                    <button class='personal_table-add-button personal_table-button_them' type="Submit"  onclick="" >Thêm</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>
<div class="clear"></div>