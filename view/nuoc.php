<?php
include "header.php";
?>
<link rel="stylesheet" href="./assets/css/nuoc.css">


<!-- tạo giao diện sắp xếp -->
<div>
    <select id='nuoc__select'>
    <option class='nuoc__select--sap_xep' value=0>Sắp xếp</option>
    <option class='nuoc__select--ss_ten' value=0>Tên</option>
    <option class='nuoc__select--ss_gia_ban' value=0>Giá bán</option>
    </select>
</div>

<?php
include "../controller/controller_nuoc_va_tp/nuoc_hien_thi.php"
?>

<div class='clear'></div>

<!-- tạo chỉ mục trang -->
<!-- them--popup -->

<?php include "view_nuoc_popup.php"
?>
<!-- Thêm nước -->

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
    const nuocThemPupUp = document.querySelectorAll('.nuoc__table--button_them')
    function showAdd() {
        nuocModal.classList.add('nuoc__modal--popup--open')
    }
    nuocThem[0].addEventListener('click',showAdd)
    
    // bắt sự kiện nút hủy ở trong popup
    function close() {
        nuocModal.classList.remove('nuoc__modal--popup--open')
    }
    nuocClose[0].addEventListener('click',close)

    function themPupUp() {
        nuocModal.classList.remove('nuoc__modal--popup--open')
    }

    nuocThemPupUp[0].addEventListener('click',themPupUp)
 
</script>

<script>
  // Lấy tất cả các hàng trong bảng
  var rows = document.getElementsByTagName("tr");

  // Biến lưu trữ trạng thái hiện tại của bảng
  var currentRow = null;

  // Đặt sự kiện click cho mỗi hàng
  for (var i = 0; i < rows.length; i++) {
    rows[i].onclick = function() {
      // Kiểm tra xem một hàng khác đã được chọn trước đó hay chưa
      if (currentRow != null) {
        // Nếu có, đặt lại màu nền của hàng đó
        currentRow.style.backgroundColor = "";
      }
      // Lấy giá trị của các ô trong hàng được kích hoạt
      var cells = this.getElementsByTagName("td");
      var cellID = cells[0].innerHTML;
      currentRow = this;
      this.style.backgroundColor = "yellow";

    //   // Tạo đối tượng XMLHttpRequest
    //   var xhttp = new XMLHttpRequest();

    //   // Định nghĩa callback function để xử lý kết quả trả về từ máy chủ
    //   xhttp.onreadystatechange = function() {
    //     if (this.readyState == 4 && this.status == 200) {
    //       console.log("Dữ liệu đã được gửi thành công!");
    //     }
    //   };

    //   // Chỉ định URL và phương thức HTTP
    //   var url = "../controller/controller_nuoc_va_tp/nuoc_xoa.php";
    //   var method = "POST";

    //   // Chỉ định các tham số để gửi dữ liệu
    //   var params = "nuocID=" + cellID;
    //   console.log(params);

    //   // Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
    //   xhttp.open(method, url, true);
    //   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //   xhttp.send(params);
    }
  }

//     const nuocXoa = document.querySelectorAll('.js-xoa')
//     function xoaNuoc() {
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       // Xử lý kết quả trả về từ file PHP
//       console.log(this.responseText);
//     }
//   };
//     xhttp.open("POST", "../controller/controller_nuoc_va_tp/nuoc_xoa.php", true);
//     xhttp.send();
// }
//     nuocXoa[0].addEventListener('click',xoaNuoc)
</script>


</body>
</html>