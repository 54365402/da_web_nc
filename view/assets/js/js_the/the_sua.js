document.addEventListener('DOMContentLoaded', function () {
    var suaButton = document.querySelector('.js-sua');
    suaButton.addEventListener('click', function () {
      // Lấy giá trị các ô input đã sửa
      var idHV = document.querySelector('.text_the_id_hv').value;
      var cardID = document.querySelector('.text_card_id').value;
      var idNV = document.querySelector('.text_id_nv').value;
  
      // Gửi dữ liệu đã sửa lên server
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'the_sua.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Xử lý phản hồi từ server sau khi lưu dữ liệu thành công
          // Ví dụ: cập nhật thông báo thành công hoặc làm các thao tác khác
          console.log(xhr.responseText);
        }
      };
      xhr.send('&idHV=' + encodeURIComponent(idHV) + '&cardID=' + encodeURIComponent(cardID) + '&idNV=' + encodeURIComponent(idNV));
    });
  });
  