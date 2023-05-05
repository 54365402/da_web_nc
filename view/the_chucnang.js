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

}}}