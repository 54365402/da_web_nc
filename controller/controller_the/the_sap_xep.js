// Xử lý sự kiện khi lựa chọn thay đổi
document.getElementById('the_select').addEventListener('change', function() {
  var sortOption = this.value;
  var url = 'the_sap_xep.php?sort=' + sortOption;

  // Gửi yêu cầu AJAX để cập nhật dữ liệu
  var xhr = new XMLHttpRequest();
  xhr.open('GET', url, true);
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Cập nhật dữ liệu mới vào bảng
      document.getElementById('the_table_body').innerHTML = xhr.responseText;
    }
  };
  xhr.send();
  
});