{const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
     
    // Lấy tất cả các hàng trong bảng
    var rows = $$('.class_table_row-hienthi');
    
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
        this.style.backgroundColor = "#549dd4";
    
        // Tạo đối tượng XMLHttpRequest
        var xhttp = new XMLHttpRequest();
    
        // Định nghĩa callback function để xử lý kết quả trả về từ máy chủ
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            console.log("Dữ liệu đã được gửi thành công!");
          }
        };
    
        // Chỉ định URL và phương thức HTTP
        var url = "../controller/controller_nhan_vien/phuong_thuc_day/class_delete.php";
        var method = "POST";
    
        // Chỉ định các tham số để gửi dữ liệu
        var classID = "classID=" + cellID;
       
        // Bắt sự kiện xóa
        var classXoa = $('.js-xoa');
        classXoa.onclick = function(e){
        if(confirm("Bạn có chắc muốn xóa ID "+cellID+" không?")){
          // Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(dctID);
          // Refresh lại trang
          location.reload(true)
        }
        }
        var classUpdate = $('.js-sua');
        classUpdate.onclick = function(e){
        currentRow.setAttribute('contenteditable','');
        alert('Mời bạn tiến hành chỉnh sửa!');
        currentRow.onkeyup=function(e){
          if(e.which===27){
            this.setAttribute('contenteditable',' ')
            var cellten_lop = cells[1].innerHTML;
            var cellpackages = cells[2].innerHTML;
            var cellthoi_luong = cells[3].innerHTML;
            var cellngay_hoat_dong = cells[4].innerHTML;
            var cellso_luong_hv = cells[5].innerHTML;
            var cellname = cells[6].innerHTML;
            var cellid_nv = cells[7].innerHTML;
            var celldoanh_thu = cells[8].innerHTML;
    
            var ten_lop = "ten_lop=" + cellten_lop;
            var packages = "packages=" + cellpackages;
            var thoi_luong = "thoi_luong=" + cellthoi_luong;
            var ngay_hoat_dong = "ngay_hoat_dong=" + cellngay_hoat_dong;
            var so_luong_hv = "so_luong_hv=" + cellso_luong_hv;
            var name = "name=" + cellname;
            var id_nv = "id_nv=" + cellid_nv;
            var doanh_thu = "doanh_thu=" + celldoanh_thu;

       
          url = "../controller/controller_nhanh_vien/phuong_thuc_day/class_update.php" 
          if(confirm("Bạn có chắc muốn sửa ID "+cellID+" không?")){
          //Mở kết nối đến máy chủ và gửi yêu cầu HTTP POST
          xhttp.open(method, url, true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(id_class+"&"+ten_lop+"&"+packages+"&"+thoi_luong+"&"+ngay_hoat_dong+"&"+so_luong_hv+"&"+name+"&"+id_nv+"&"+doanh_thu);
          location.reload(true)
          }
          }
        }
      }
    }
    }
    }
    