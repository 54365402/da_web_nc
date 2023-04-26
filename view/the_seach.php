<?php
// Kết nối cơ sở dữ liệu
//$servername = "localhost";
//$username = "username";
//$password = "password";
$dbname = "card";

$conn = mysqli_connect( $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Lấy dữ liệu từ ô nhập liệu
$cardsearch = $_GET['cardsearch'];

// Thực hiện tìm kiếm dữ liệu
$sql3 = "SELECT * FROM card WHERE types_room LIKE '%".$cardsearch."%'";
$result = mysqli_cardsearch($conn, $sql3);

// Hiển thị kết quả tìm kiếm trên trang web của mình
if (mysqli_num_rows($result) > 0) {
    // Hiển thị kết quả tìm kiếm
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["card_id"]. " - Name: " . $row["types_room"]. "<br>";
    }
} else {
    echo "Không tìm thấy kết quả phù hợp.";
}

// Đóng kết nối
mysqli_close($conn);
?>
