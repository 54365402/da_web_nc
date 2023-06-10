{const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
     
    // Lấy tất cả các hàng trong bảng
    var rows = $$('.td__table_row--hienthi');
 
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
    
        currentRow = this;
        this.style.backgroundColor = "yellow";
    
        // Tạo đối tượng XMLHttpRequest
        var xhttp = new XMLHttpRequest();
    
        // Định nghĩa callback function để xử lý kết quả trả về từ máy chủ
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            console.log("Dữ liệu đã được gửi thành công!");
          }
        };
    
        // Chỉ định URL và phương thức HTTP
        var method = "POST";
             
        // Chỉ định các tham số để gửi dữ liệu
       
        
        var tdUpdate = $('.js-sua');
        tdUpdate.onclick = function(e){
        currentRow.setAttribute('contenteditable','');
        alert('Mời bạn tiến hành chỉnh sửa!');
        currentRow.onkeyup=function(e){
          if(e.which===27){
            this.setAttribute('contenteditable',' ')
            var cellid_hv = cells[0].innerHTML;
            var cellname_hv = cells[1].innerHTML;
            var celldiem_tich_luy = cells[2].innerHTML;
            var celllngay_sinh = cells[3].innerHTML;
            var cellid_gift = cells[4].innerHTML;
            var celltrang_thai = cells[5].innerHTML;
    
            var tdid_hv = "tdid_hv=" + cellid_hv;
            var tdname_hv = "tdname_hv=" + cellname_hv;
            var tddiem_tich_luy = "tddiem_tich_luy=" + celldiem_tich_luy;
            var tdngay_sinh = "tdlngay_sinh=" + celllngay_sinh;
            var tdid_gift = "tdid_gift=" + cellid_gift;
            var tdtrang_thai = "tdtrang_thai=" + celltrang_thai;
       
          url = "../../controller/controller_nhan_vien/bang_luong/td_update.php";
          if(confirm("Bạn có chắc muốn sửa ID "+cellid_hv+" không?")){
          //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(tdid_hv+"&"+tdname_hv+"&"+tddiem_tich_luy+"&"+tdngay_sinh+"&"+tdid_gift+"&"+tdtrang_thai);
          location.reload(true);
          }
          }
        }
      }
    }
    }
    }
    