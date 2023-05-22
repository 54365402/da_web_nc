<?php include_once "../controller/connection.php";?>
<div class='class_modal-popup'>
    <div class='class_modal_div-popup'>
        <i><b><u class='class_modal_div-u'>Thêm PT</u></b></i>
        <div >
            <form action="../controller/controller_nhan_vien/phuong_thuc_day/class_add.php" method="POST">
                <table class='class_table-addform'>
                <!-- <tr>
                    <td><label for="">ID Class : </label></td>
                    <td><input type="text" class="class_table-add-input" name="class_table-add-id_class"
                            placeholder="ID Class...">
                    </td>
                </tr> -->
                <tr>
                    <td><label for="">ID Nhân Viên : </label></td>
                    <td>
                          
                                <?php 
                                    $sql = "SELECT * FROM tbl_nhan_vien";
                                    $query = mysqli_query($mysqli, $sql);
                                    while($row = mysqli_fetch_array($query))
        {
            ?>
            <tr class='class_table_row-hienthi'>
                <td  class="class_table_td-hienthi-td"><?php echo $row["id_class"]?></td>
            <?php
        }
            ?>    
                          
                        </td>               
                    
                    <td><input type="text" class="class_table-add-input" name="class_table-add-id_nv"
                            placeholder="ID Nhân Viên...">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Tên lớp : </label></td>
                    <td><input type="text" class="class_table-add-input" name="class_table-add-ten_lop"
                            placeholder="Tên lớp...">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Gói : </label></td>
                    <td><input type="text" class="class_table-add-input" name="class_table-add-packages"
                          placeholder="Gói...">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Thời lượng :</label></td>
                    <td><input type="text" class="class_table-add-input" name="class_table-add-thoi_luong"
                            placeholder="Thời lượng...">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Ngày hoạt động : </label></td>
                    <td><input type="text" class="class_table-add-input" name="class_table-add-ngay_hoat_dong"
                            placeholder="Ngày...">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Số lượng hội viên : </label></td>
                    <td><input type="text" class="class_table-add-input" name="class_table-add-so_luong_hv"
                            placeholder="Số lượng hội viên...">
                    </td>
                </tr>
                <tr>
                    <td><label for="">Doanh Thu : </label></td>
                    <td><input type="text" class="class_table-add-input" name="class_table-add-doanh_thu"
                            placeholder="Doanh Thu...">
                    </td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <button class="class_table-add-button class_table-button_huy" type="button" onclick="">Hủy</button>
                        <button class="class_table-add-button class_table-button_them" type="Submit" onclick="">Thêm</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<div class="clear"></div>