{const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    var rows = $$('.a');

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
      var cells = this.getElementsByTagName("th");
      var cellID = cells[0].innerHTML;
  
      currentRow = this;
      this.style.backgroundColor = "#f2f2f2";
  
      // Tạo đối tượng XMLHttpRequest
      var xhttp = new XMLHttpRequest();
  
      // Định nghĩa callback function để xử lý kết quả trả về từ máy chủ
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          console.log("Dữ liệu đã được gửi thành công!");
        }
      };

      var InfoUpdate = $('.js-update');
        InfoUpdate.onclick = function(e){
        currentRow.setAttribute('contenteditable','');
        alert('Mời bạn tiến hành chỉnh sửa!');
        currentRow.onkeyup=function(e){
          if(e.which===27){
            this.setAttribute('contenteditable',' ')

            var cell_chuc_vu = cells[1].innerHTML;
            var cell_ho_ten = cells[2].innerHTML;
            var cell_ten_tk = cells[3].innerHTML;
            var cell_pass = cells[4].innerHTML;


            var ChucVuTK = "ChucVuTK=" + cell_chuc_vu;
            var HoTenTK = "HoTenTK=" + cell_ho_ten;
            var TenTK = "TenTK=" + cell_ten_tk;
            var PassTK = "hoivien_ngay_sinh=" + cell_pass;

          url = "../controller/controller_notice/InfoUpdate.php" 
          if(confirm("Bạn có chắc muốn sửa ID "+cellID+" không?")){
          //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(params+"&"+ChucVuTK+"&"+HoTenTK+"&"+TenTK+"&"+PassTK);
          }
          }
        }
      }

    }
}
}