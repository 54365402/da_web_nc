<!DOCTYPE html>
<html>
<head>
  <title>Ngăn chặn refresh trang khi thay đổi select option</title>
</head>
<body>
  <select id="mySelect">
    <option value="option1">Option 1</option>
    <option value="option2">Option 2</option>
    <option value="option3">Option 3</option>
  </select>

  <script>
    var selectElement = document.getElementById("mySelect");

    selectElement.onchange = function(event) {
      event.preventDefault();
      // Xử lý logic khi thay đổi select option tại đây
      console.log("Đã thay đổi select option");
    };
  </script>
</body>
</html>
