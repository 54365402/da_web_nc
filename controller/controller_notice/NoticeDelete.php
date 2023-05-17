<?php
    include_once "../controller/connection.php";
?>

<?php
$sql = "UPDATE tbl_notice SET status=0 ";

if ($mysqli->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $mysqli->error;
}
?>