<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="image_file" accept="image/*">
    <input type="submit" value="Tải lên">
</form>
<?php
$target_dir = "uploads/"; // Thư mục đích để lưu trữ tệp ảnh tải lên
$target_file = $target_dir . basename($_FILES["image_file"]["name"]); // Đường dẫn đầy đủ đến tệp ảnh tải lên

// Kiểm tra nếu tệp ảnh đã tồn tại
if (file_exists($target_file)) {
    echo "Tệp ảnh đã tồn tại.";
    // Có thể thực hiện các hành động khác ở đây nếu cần thiết
} else {
    // Di chuyển tệp ảnh từ vị trí tạm thời đến thư mục đích
    if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_file)) {
        echo "Tải lên thành công.";

        // Lưu đường dẫn tệp ảnh vào cơ sở dữ liệu
        $image_path = $target_file;
    }}
    echo $image_path;
?>
</body>
</html>