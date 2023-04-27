<!-- Kết nối CSDL -->
<?php
    include "../controller/connection.php";
?>

<link rel="stylesheet" href="./assets/css/the.css">

<!-- Hien thi bang -->
<br>
<div class="the_ten-hienthi">
   <li><h2 class = "the_ten1 abc">Thẻ tập</h2></li>
   <li><div class = "the_ten">     
        <form action="the_search.php" method="get">
        <input class="the_ten1 the_ten-up" type="text" placeholder="Tìm kiếm..." name="cardsearch" height="50px">
        <input class="the_ten-search" type="submit" value="Tìm kiếm">
        </form>
    </div>
    </li>    
</div>

<div class='the_div-fixed'>
<div class="the_div-hienthi">

    <table class="the_table-hienthi">        
        <tr class='the_table_row-hienthi the_table-Tieu_de'>
            <th>Card ID</th>
            <th>Tên</th>
            <th>Thành Tiền</th>
            <th>Trạng Thái</th>
        </tr>
        <?php
        // Định nghĩa biến $p
        $p = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        // Số lượng dữ liệu hiển thị trên mỗi trang
        $limit = 14;

        // Tính toán vị trí bắt đầu của dữ liệu trên trang hiện tại
        $start = ($p - 1) * $limit;

        // Câu truy vấn SQL
        $sqlthe1 = "SELECT * FROM card ORDER BY card_id DESC LIMIT $start, $limit";

        // Thực thi câu truy vấn
        $query = mysqli_query($mysqli,$sqlthe1);

        // Duyệt qua các phần tử trong bảng
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
        <?php
       }
        ?>        
    </table>

    <?php
    // Tính toán và hiển thị phân trang
    $sql_count = "SELECT COUNT(*) as count FROM card";
    $result_count = mysqli_query($mysqli, $sql_count);
    $row_count = mysqli_fetch_array($result_count);
    $total = $row_count["count"];                    // Tổng số dữ liệu
    $page_count = ceil($total / $limit);            // Tổng số trang
    ?>
    <center class = "the_page-hienthi" >
        <?php
            for ($i = 1; $i <= $page_count; $i++) {
                if ($i == $p) {
                    echo " " . $i . " ";
                } else {
                    echo ' <a href="?page=' . $i . '">' . $i . '</a> ';
                }
            }
        ?>
    </center>
</div>



<div class = "the_div-hienthi1"> <form action="/the_action_checkbox.php">

    <table class="the_table-hienthi1" style="border: 3px solid blue;">        
          <tr><th colspan = "2" ;>Thông tin chi tiết thẻ</th></tr>
          <tr><tr>
          <tr><td>Họ và Tên: </td><td><input type="textten" name="inputten" style="border: none; outline:none "></td></tr>
          <tr><td>ID: </td><td><input type="textid" name="inputid" style="border: none; outline:none "></td></tr>    
    </table>

    <div class = "the_table-hienthi2" ><table>
        <div class = "the_box_types_room1" style="border: 2px solid blue;">     
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Gym">
            <label for="vehicle1"> Gym</label><br><br>
            <input type="checkbox" id="vehicle2" name="vehicle2" value="Yoga">
            <label for="vehicle2"> Yoga</label><br><br>
            <input type="checkbox" id="vehicle3" name="vehicle3" value="Aerobic">
            <label for="vehicle3"> Aerobic</label><br>
        </div>   

        <div class = "the_box_types_room2" style="border: 2px solid blue;"> 
            <input type="checkbox" id="vehicle4" name="vehicle1" value="Boxing">
            <label for="vehicle4"> Boxing</label><br><br>
            <input type="checkbox" id="vehicle5" name="vehicle2" value="Dancing">
            <label for="vehicle5"> Dancing</label><br><br>
            <input type="checkbox" id="vehicle6" name="vehicle2" value="Swimming">
            <label for="vehicle6"> Swimming</label><br>
        </div></table>
    </div>
        
        <div class="the_table-hienthi3" style="border: 3px solid blue;"> 
            <table>
                <label>Gói tập: </label><input type="text1" name="input1" style="border: none; outline:none;"><br>
                <label>Số lượng: </label><input type="text2" name="input2" style="border: none; outline: none;"><br>
                <label>Lớp: </label><input type="text3" name="input3" style="border: none; outline: none;"> <br>
                <label>Ngày bắt đầu: </label><input type="text4" name="input4" style="border: none; outline: none;"><br>
                <label>Ngày kết thúc: </label><input type="text5" name="input5" style="border: none; outline: none;"><br>
                <label>Thành tiền: </label><input type="text6" name="input6" style="border: none; outline: none;"><br>
                <label>Lần cuối hoạt động: </label><input type="text7" name="input7" style="border: none; outline: none;"><br>
            </table>
        </div>  
   

</div>