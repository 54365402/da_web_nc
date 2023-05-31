<!DOCTYPE html>
<html>
<head>
  <title>Hiển thị ảnh khi chọn từ input file</title>
  <style>
    img {
      max-width: 300px;
      max-height: 300px;
    }
  </style>
</head>
<body>
    <div id="imageContainer"></div>
    <input type="file" id="imageInput">

  <script>
    // Lấy tham chiếu đến input file và container
    var imageInput = document.getElementById('imageInput');
    var imageContainer = document.getElementById('imageContainer');

    // Xử lý sự kiện onchange của input file
    imageInput.addEventListener('change', function(event) {
      // Lấy tệp tin ảnh từ input file
      var file = event.target.files[0];
      
      // Tạo đối tượng FileReader
      var reader = new FileReader();
      
      // Xử lý sự kiện load của FileReader
      reader.onload = function(e) {
          // Tạo phần tử hình ảnh và gán thuộc tính src
          var image = document.createElement('img');
          image.src = e.target.result;
          
          // Thêm phần tử hình ảnh vào container
          imageContainer.innerHTML = '';
          imageContainer.appendChild(image);
        };
        
      // Đọc nội dung của tệp tin ảnh dưới dạng URL data
      reader.readAsDataURL(file);
    });
  </script>
</body>
</html>
