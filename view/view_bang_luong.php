
<div class='bl__modal--popup'>
    <div class='bl__modal__div--popup'>
        <i><b><u class='bl__modal__div--u'>Thêm lương</u></b></i>
    <div >
    <form action="../controller/controller_nhan_vien/bang_luong/bl_add.php" method="POST">
        <table class='bl__table--addform'>
            <tr>
                <td><label for="fname">IDNV:</label></td>
                <td><input class='bl__table--add_input' type="text"  name="bl__table--add_idnv" placeholder="IDNV....">
                    <!-- <button class='' type="Submit"  onclick="" >Thêm</button> -->
                </td>
            </tr>
            <!-- <tr>
                <td><label for="fname">Tên:</label></td>
                <td><input class='bl__table--add_input' type="text"  name="bl__table--add_ten" ><?php //echo $_SESSION['bl_ktra']?></td>
            </tr> -->
            <tr>
                <td><label for="lname">Time Start:</label></td>
                <td><input class='bl__table--add_input' type="date"  name="bl__table--add_time_start" placeholder="Time Start...."></td>
            </tr>
            <tr>
            <td><label for="lname">Số công:</label></td>
                <td><input class='bl__table--add_input' type="text"  name="bl__table--add_so_cong" placeholder="Số công...." ></td>
            </tr>
            <tr>
                <td><label for="lname">Lương trên công:</label></td>
                <td><input class='bl__table--add_input' type="text"  name="bl__table--add_luong_tren_cong" placeholder="Lương trên công...."></td>
            </tr>
            <tr>
                <td><label for="lname">Lương:</label></td>
                <td><input class='bl__table--add_input' type="text"  name="bl__table--add_luong" placeholder="Lương...."></td>
            </tr>
            <tr>
                <td><label for="lname">Trạng thái:</label></td>
                <td><input class='bl__table--add_input' type="text"  name="bl__table--add_trang_thai" placeholder="Trạng thái...."></td>
            </tr>

            <tr>
                <td colspan='2'>
                    <button class='bl__table--add-button bl__table--button_huy' type="button" onclick="">Hủy</button>
                    <button class='bl__table--add-button bl__table--button_them' type="Submit"  onclick="" >Thêm</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>
<div class="clear"></div>