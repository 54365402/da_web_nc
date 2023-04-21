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