<!-- Kết nối CSDL -->
<?php
    include "../controller/connection.php";
  
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }
    // Số hàng một trang
    $rowsPerPage=6;
    $perRow = $page * $rowsPerPage - $rowsPerPage;
    $sql = "SELECT * FROM tbl_hoi_vien LIMIT $perRow, $rowsPerPage";
    $query = mysqli_query($mysqli,$sql);
    // Tổng số sản phẩm
    $totalRows = mysqli_num_rows(mysqli_query($mysqli, "SELECT * FROM tbl_hoi_vien"));
    // Tính tổng số trang pages
    $totalPages = ceil($totalRows/$rowsPerPage);
    // Xây dựng thanh phân trang
    $listPages = "";
    for ($i=1; $i<=$totalPages; $i++)
    {
        if($page==$i){
            $listPages .= '<input class="active hoivien_page" type="submit" value="'.$i.'" name="page">';
        }
        else{
            $listPages .= '<input class="hoivien_page" type="submit" value="'.$i.'" name="page">';
        }
    }
    
?>