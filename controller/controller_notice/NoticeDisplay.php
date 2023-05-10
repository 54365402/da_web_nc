<?php
    include_once "../controller/connection.php";
?>

<?php
         $sql = "SELECT notice FROM tbl_notice WHERE status=1 ORDER BY addAt";
         $result = $mysqli->query($sql);
         if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "- " . $row["notice"].  "<br>";
            }
          } else {
            echo "0 results";
          }
        ?>    


<?php
$mysqli -> close();
?>

