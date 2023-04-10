<?php
include "header.php";
?>
<link rel="stylesheet" href="./assets/css/nuoc1.css">


<!-- tạo giao diện sắp xếp -->
<div>
    <select id='nuoc__select'>
    <option class='nuoc__select--sap_xep' value=0>Sắp xếp</option>
    <option class='nuoc__select--ss_ten' value=0>Tên</option>
    <option class='nuoc__select--ss_gia_ban' value=0>Giá bán</option>
    </select>
</div>

<?php
include "nuoc_hien_thi.php"
?>

<div class='clear'></div>

<!-- tạo chỉ mục trang -->
<!-- them--popup -->
<div class='nuoc__modal--popup'>
    <div class='nuoc__modal__div--popup'>
        <i><b><u class='nuoc__modal__div--u'>Thêm sản phẩm</u></b></i>
    <div >
    <form action="">
        <table class='nuoc__table--addform'>
            <tr>
                <td><label for="fname">Tên:</label></td>
                <td><input class='nuoc__table--add_input' type="text" id="nuoc__table--add_ten" name="nuoc__table--add_ten"></td>
            </tr>
            <tr>
                <td><label for="lname">Tuổi:</label></td>
                <td><input class='nuoc__table--add_input' type="text" id="nuoc__table--add_tuoi" name="nuoc__table--tuoi"></td>
            </tr>
            <tr>
                <td><label for="lname">Giới tính:</label></td>
                <td><select class='nuoc__table--add_input nuoc__table--option'>
                <option value="nam">Nam</option>
                <option value="nu">Nữ</option>
                <option value="khac">Khác</option>
                </select>
                </td>
            </tr>
            <tr>
                <td><label for="lname">Ngày sinh:</label></td>
                <td><input class='nuoc__table--add_input' type="text" id="nuoc__table--add_ngay_sinh" name="nuoc__table--add_ngay_sinh"></td>
            </tr>
            <tr>
                <td><label for="lname">CMND:</label></td>
                <td><input class='nuoc__table--add_input' type="text" id="nuoc__table--add_cmnd" name="nuoc__table--add_cmnd"></td>
            </tr>
            <tr>
                <td><label for="lname">SĐT:</label></td>
                <td><input class='nuoc__table--add_input' type="text" id="nuoc__table--add_sdt" name="nuoc__table--add_sdt"></td>
            </tr>
            <tr>
                <td><label for="lname">Biển số xe:</label></td>
                <td><input class='nuoc__table--add_input' type="text" id="nuoc__table--add_bien_so_xe" name="nuoc__table--add_bien_so_xe"></td>
            </tr>
            <tr>
                <td colspan='2'>
                    <button class='nuoc__table--add-button nuoc__table--button_huy' type="button" onclick="">Hủy</button>
                    <input class='nuoc__table--add-button' type="Submit" value="Thêm">
                </td>
            </tr>
        </table>
    </form>
    </div>
    </div>
</div>
<div class="clear"></div>
<!-- tạo giao diện nút thêm, sửa, xóa -->
<div class='nuoc__div--chua_button'>
    <button class='nuoc__div--button js-them' type="button" onclick="">Thêm</button>
    <button class='nuoc__div--button js-sua' type="button" onclick="">Cập nhập</button>
    <button class='nuoc__div--button js-xoa nuoc__div--button_xoa' type="button" onclick="">Xóa</button>    
</div>

<!-- bắt sự kiện nút thêm ở ngoài giao diện chính-->
<script>
    // document là đại diện cho trang web, muốn lấy gì ở web thì phải qua document
    const nuocThem = document.querySelectorAll('.js-them')
    const nuocModal = document.querySelector('.nuoc__modal--popup')
    const nuocClose = document.querySelectorAll('.nuoc__table--button_huy')
    function showAdd() {
        nuocModal.classList.add('nuoc__modal--popup--open')
    }
    nuocThem[0].addEventListener('click',showAdd)
    
    // bắt sự kiện nút hủy ở trong popup
    function close() {
        nuocModal.classList.remove('nuoc__modal--popup--open')
    }
    nuocClose[0].addEventListener('click',close)
</script>

</body>
</html>