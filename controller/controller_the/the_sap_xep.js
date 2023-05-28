{
  // Xử lý sự kiện khi lựa chọn thay đổi
  document.getElementById('the_select').addEventListener('change', function() {
    var sortOption = this.value;
    var url = 'the_sap_xep.php?sort=' + sortOption;

    // Gửi yêu cầu AJAX để cập nhật dữ liệu
    var xhthe = new XMLHttpRequest();
    xhthe.open('GET', url, true);
    xhthe.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhthe.onreadystatechange = function() {
      if (xhthe.readyState === 4 && xhthe.status === 200) {
        // Cập nhật dữ liệu mới vào bảng
        document.getElementById('the_table_body').innerHTML = xhthe.responseText;
      }
    };
    xhthe.send();
    
  });
}