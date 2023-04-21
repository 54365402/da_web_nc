<!-- Kết nối CSDL -->
<?php
    include "../controller/connection.php";
    $sql2 = "SELECT * FROM card ORDER BY card_id DESC";
    $query = mysqli_query($mysqli,$sql2);
?>
<link rel="stylesheet" href="./assets/css/the1.css">
<!-- Hien thi bang -->
<br>
<div class="the_ten-hienthi">
   <li><h2 class = "the_ten1 abc">Thẻ tập</h2></li>
   <li><div class = "the_ten ">     
        <form action="the_search.php" method = "get">
        <input class = "the_ten1 the_ten-up" type="text" placeholder="Tìm kiếm..." name="cardsearch" heigth=50px >
        <input class = "the_ten-search" type="submit" value="Tìm kiếm">
        </form>
    </div>
    </li>    
</div>
<div  class='the_div-fixed'>
<div class = "the_div-hienthi">
    
    <table class="the_table-hienthi">        
        <tr class='the_table_row-hienthi the_table-Tieu_de'>
            <th>Card ID</th>
            <th>Tên</th>
            <th>Thành Tiền</th>
            <th>Trạng Thái</th>
        </tr>
        <?php
        // Duyệt qua các phẩn từ trong bảng
        while($row = mysqli_fetch_array($query))
       {
        ?>
        <tr class='the_table_row-hienthi'>
            <td><?php echo $row["card_id"]?></td>
            <td><?php echo $row["types_room"]?></td>
            <td><?php echo $row["total_money"]?></td>
            <td><?php echo $row["status"]?></td>
        <?php
       }
        ?>
        
    </table>

</div>

<div class = "the_div-hienthi1">
<!-- <div class = "the_di_chuyen"> -->
    <table class="the_table-hienthi1">        
          <tr><th colspan = "2">Thông tin chi tiết thẻ</th></tr>
          <tr><tr>
          <tr><td>Họ và Tên: </td><td><input type="textten" name="inputten" style="border: none; outline:none "></td></tr>
          <tr><td>ID: </td><td><input type="textid" name="inputid" style="border: none; outline:none "></td></tr>    
    </table>

    <div class = "the_table-hienthi2">
        <div class = "the_box_types_room1">     
            <form action="/the_action_checkbox.php"><br>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Gym">
            <label for="vehicle1"> Gym</label><br><br>
            <input type="checkbox" id="vehicle2" name="vehicle2" value="Yoga">
            <label for="vehicle2"> Yoga</label><br><br>
            <input type="checkbox" id="vehicle3" name="vehicle3" value="Aerobic">
            <label for="vehicle3"> Aerobic</label><br><br>
        </div>    
        <div class = "the_box_types_room2"> 
            <form action="/the_action_checkbox.php"><br>
            <input type="checkbox" id="vehicle4" name="vehicle1" value="Boxing">
            <label for="vehicle4"> Boxing</label><br><br>
            <input type="checkbox" id="vehicle5" name="vehicle2" value="Dancing">
            <label for="vehicle5"> Dancing</label><br><br>
            <input type="checkbox" id="vehicle6" name="vehicle2" value="Swimming">
            <label for="vehicle6"> Swimming</label><br><br>
        </div>
    </div>
        
    <div class="the_table-hienthi3 "> 
          <table><tr>
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
    </div>