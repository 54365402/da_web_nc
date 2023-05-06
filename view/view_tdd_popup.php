<div class='tdd__modal--popup'>
    <div class='tdd__modal__div--popup'>
        <i><b><u class='tdd__modal__div--u'>Thêm dụng cụ tập</u></b></i>
    <div >
    <form action="../controller/controller_csvc/tdd_add.php" method="POST">
        <table class='tdd__table--addform'>
            <tr>
                <td><label for="lname">Số tủ:</label></td>
                <td><input class='tdd__table--add_input' type="text"  name="tdd__table--add_so_tu" placeholder="Quantity...."></td>
            </tr>
            <tr>
            <td><label for="lname">Loại tủ:</label></td>
                <td><input class='tdd__table--add_input' type="text"  name="tdd__table--add_loai_tu" placeholder="Supplier...." ></td>
            </tr>
            <tr>
                <td><label for="lname">Trạng thái:</label></td>
                <td><input class='tdd__table--add_input' type="text"  name="tdd__table--add_trang_thai" placeholder="Date Added...."></td>
            </tr>
            <tr>
                <td><label for="lname">ID hội viên:</label></td>
                <td><input class='tdd__table--add_input' type="text"  name="tdd__table--add_id_hv" placeholder="Maintenance...."></td>
            </tr>
            <tr>
                <td><label for="lname">Ngày bắt đầu:</label></td>
                <td><input class='tdd__table--add_input' type="text"  name="tdd__table--add_time_start" placeholder="Guarantee...."></td>
            </tr>
            <tr>
                <td><label for="lname">Ngày kết thúc:</label></td>
                <td><input class='tdd__table--add_input' type="text"  name="tdd__table--add_time_end" placeholder="Maintenance Costs...."></td>
            </tr>
            <tr>
                <td><label for="lname">Ghi chú:</label></td>
                <td><input class='tdd__table--add_input' type="text"  name="tdd__table--add_ghi_chu" placeholder="Note...."></td>
            </tr>
            <tr>
                <td colspan='2'>
                    <button class='tdd__table--add-button tdd__table--button_huy' type="button" onclick="">Hủy</button>
                    <button class='tdd__table--add-button tdd__table--button_them' type="Submit"  onclick="" >Thêm</button>
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>
<div class="clear"></div>