{const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
 
// Lấy tất cả các hàng trong bảng
var rows = $$('.the_table_row-hienthi');

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
    this.style.backgroundColor = "#f25612";

      // Đặt sự kiện click cho nút Chi tiết
  var btnChiTiet = $('.js-chitiet');
  btnChiTiet.onclick = function() {
    // Lấy thông tin của hàng được chọn
    var cells = currentRow.getElementsByTagName("td");
    var cellID = cells[0].innerHTML;

    // Gửi yêu cầu AJAX để tải nội dung của bảng chi tiết
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // Đặt nội dung của bảng chi tiết vào một phần tử HTML
        $('#the_div-chi_tiet').innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "bang_chi_tiet.php?cellID=" + cellID, true);
    xhttp.send();
  }
}}}