{const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    var rows = $$('.p');

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
  

      var PriceUpdate = $('.js-update');
        PriceUpdate.onclick = function(e){
        currentRow.setAttribute('contenteditable','');
        alert('Mời bạn tiến hành chỉnh sửa!');
        currentRow.onkeyup=function(e){
          if(e.which===27){
            this.setAttribute('contenteditable',' ')
            var cell_1lan = cells[1].innerHTML;
            var cell_1thang = cells[2].innerHTML;
            var cell_3thang = cells[3].innerHTML;
            var cell_6thang = cells[4].innerHTML;
            var cell_1nam = cells[5].innerHTML;
            var cell_2nam = cells[6].innerHTML;
            var cell_5nam = cells[7].innerHTML;
            var cell_gym_rieng = cells[8].innerHTML;

            var cell_yoga_basic = cells[9].innerHTML;
            var cell_yoga_average = cells[10].innerHTML;
            var cell_yoga_advance = cells[11].innerHTML;
            var cell_yoga_rieng = cells[12].innerHTML;

            var cell_aerobic_basic = cells[8].innerHTML;
            var cell_aerobic_average = cells[8].innerHTML;
            var cell_aerobic_advance = cells[8].innerHTML;
            var cell_aerobic_rieng = cells[8].innerHTML;

            var cell_boxing_basic = cells[8].innerHTML;
            var cell_boxing_averge = cells[8].innerHTML;
            var cell_boxing_advance = cells[8].innerHTML;
            var cell_boxing_rieng = cells[8].innerHTML;

            var cell_swimming_basic = cells[8].innerHTML;
            var cell_swimming_average = cells[8].innerHTML;
            var cell_swimming_advance = cells[8].innerHTML;
            var cell_swimming_rieng = cells[8].innerHTML;
    
            var g1_lan = "g1_lan=" + cell_1lan;
            var g1_thang = "g1_thang=" + cell_1thang;
            var g3_thang = "g3_thang=" + cell_3thang;
            var g6_thang = "g6_thang=" + cell_6thang;
            var g1_nam = "g1_nam=" + cell_1nam;
            var g2_nam = "g2_nam=" + cell_2nam;
            var g5_nam = "g5_nam=" + cell_5nam;
            var gym_rieng = "gym_rieng=" + cell_gym_rieng;

          url = "../controller/controller_notice/PriceUpdate.php" 
          if(confirm("Bạn có chắc muốn sửa ID không?")){
          //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(params+"&"+g1_lan+"&"+g1_thang+"&"+g3_thang+"&"+g6_thang
          +"&"+g1_nam+"&"+g2_nam+"&"+g5_nam
          +"&"+gym_rieng);
          }
          }
        }
      }

}
}
}