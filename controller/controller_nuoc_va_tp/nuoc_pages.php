<!-- Kết nối CSDL -->
<?php
    include_once "../controller/connection.php";
    include_once "nuoc_sort.php";
  
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }
    // Số hàng một trang
    $rowsPerPage=11;
    $perRow = $page * $rowsPerPage - $rowsPerPage;
    $sql = "SELECT * FROM tbl_nuoc_va_thuc_pham WHERE loai_tp LIKE N'N%' 
    ORDER BY $nuoc_key $nuoc_Tang LIMIT $perRow, $rowsPerPage";
    $query = mysqli_query($mysqli,$sql);
    // Tổng số sản phẩm
    $sql1 = "SELECT * FROM tbl_nuoc_va_thuc_pham WHERE loai_tp LIKE N'N%'";
    $totalRows = mysqli_num_rows(mysqli_query($mysqli,$sql1));
    // Tính tổng số trang pages
    $totalPages = ceil($totalRows/$rowsPerPage);
    // Xây dựng thanh phân trang
    $listPages = "";
    for ($i=1; $i<=$totalPages; $i++)
    {
        if($page==$i){
            $listPages .= '<input class="active nuoc--page" type="submit" value="'.$i.'" name="page">';
        }
        else{
            $listPages .= '<input class="nuoc--page" type="submit" value="'.$i.'" name="page">';
        }
    }
    
?>