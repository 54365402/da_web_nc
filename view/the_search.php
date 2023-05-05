<?php
    include "../controller/connection.php";

    // Lấy từ khóa tìm kiếm từ form
    $keyword = $_POST['cardsearch'];

    // Câu truy vấn SQL
    $sqlthe2 = "SELECT * FROM card WHERE card_id LIKE '%$keyword%' OR types_room LIKE '%$keyword%'";

    // Thực thi câu truy vấn
    $query = mysqli_query($mysqli,$sqlthe2);

    // Duyệt qua các phần tử trong bảng và hiển thị vào bảng
    while($row = mysqli_fetch_array($query))
    {
    ?>
        <tr class="the_table_row-hienthi">
            <td><?php echo $row["card_id"]?></td>
            <td><?php echo $row["types_room"]?></td>
            <td><?php echo $row["total_money"]?></td>
            <td>
                <?php 
                    if ($row["status"] == 1) {
                        echo "Đang hoạt động";  }
                    else {
                        echo "Không hoạt động";  }
                ?>
            </td>
        </tr>
    <?php
    }
    ?>
