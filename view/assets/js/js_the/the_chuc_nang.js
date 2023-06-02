// {const $ = document.querySelector.bind(document);
// const $$ = document.querySelectorAll.bind(document);
 
// // Lấy tất cả các hàng trong bảng
// var rows = $$('.the_table_row-hienthi');
// // Biến lưu trữ trạng thái hiện tại của bảng
// var currentRow = null;

// // Đặt sự kiện click cho mỗi hàng
// for (var i = 0; i < rows.length; i++) {

//   rows[i].onclick = function() {
    
  //   // Kiểm tra xem một hàng khác đã được chọn trước đó hay chưa
  //   if (currentRow != null) {
    
  //   }
   
  //   // Lấy giá trị của các ô trong hàng được kích hoạt
  //   var cells = this.getElementsByTagName("td");
  //   var cellID = cells[0].innerHTML;

  //   var cardID = "cardID="+cellID;

  //     // Đặt sự kiện click cho nút Chi tiết
  // var btnChiTiet = $('.js-chitiet');
  // btnChiTiet.onclick = function() {

  //   // Gửi yêu cầu AJAX để tải nội dung của bảng chi tiết
  //   var xhttp = new XMLHttpRequest();
  //   xhttp.onreadystatechange = function() {
  //     if (this.readyState == 4 && this.status == 200) {
  //       // Đặt nội dung của bảng chi tiết vào một phần tử HTML
  //       // $('#the_div-chi_tiet').innerHTML = this.responseText;
  //       console.log("Dữ liệu đã được gửi thành công!");
  //     }
  //   };
  //   xhttp.open("POST", "the.php", true);
  //   xhttp.send(cardID);
  // }
// }}}