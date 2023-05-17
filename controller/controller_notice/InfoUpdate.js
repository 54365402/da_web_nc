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
      //var cells = this.getElementsByTagName("tr");
      //console.log(cells);
      var cellID = rows[0].innerHTML;
      console.log(cellID);
  
      currentRow = this;
      this.style.backgroundColor = "#f2f2f2";
  
      // Tạo đối tượng XMLHttpRequest
      var xhttp = new XMLHttpRequest();

      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          console.log("Dữ liệu đã được gửi thành công!");
        }
      };
  
      // Chỉ định URL và phương thức HTTP
      var method = "POST";
  
      // Chỉ định các tham số để gửi dữ liệu
      var params = "idTK=" + cellID;
     

      var InfoUpdate = $('.js-update');
        InfoUpdate.onclick = function(e){
        currentRow.setAttribute('contenteditable','');
        alert('Mời bạn tiến hành chỉnh sửa!');
        currentRow.onkeyup=function(e){
          if(e.which===27){
            this.setAttribute('contenteditable',' ')

            var cell_chuc_vu = rows[1].innerHTML;
            var cell_ho_ten = rows[2].innerHTML;
            var cell_ten_tk = rows[3].innerHTML;
            var cell_pass = rows[4].innerHTML;


            var ChucVuTK = "ChucVuTK=" + cell_chuc_vu;
            var HoTenTK = "HoTenTK=" + cell_ho_ten;
            var TenTK = "TenTK=" + cell_ten_tk;
            var PassTK = "PassTK=" + cell_pass;

           url = "../controller/controller_notice/InfoUpdate.php"; 
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