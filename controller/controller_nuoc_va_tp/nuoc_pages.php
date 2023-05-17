<!-- Kết nối CSDL -->
<?php
    include_once "../controller/connection.php";
    include_once "nuoc_sort.php";
  
    $nuoc_get_data="";
    if(isset($_POST['nuoc__input--search']))
    {
        $nuoc_get_data = $_POST['nuoc__input--search'];
    }
    else
    {
        $nuoc_get_data = "";
    }
    // search sql
    $nuoc_search = " id_nuoc_va_tp LIKE '%$nuoc_get_data%' ";

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
    $sql = "SELECT * FROM tbl_nuoc_va_thuc_pham WHERE loai_tp LIKE N'N%' and $nuoc_search
    ORDER BY $nuoc_key $nuoc_Tang LIMIT $perRow, $rowsPerPage";
    $query = mysqli_query($mysqli,$sql);
    // Tổng số sản phẩm
    $sql1 = "SELECT * FROM tbl_nuoc_va_thuc_pham WHERE loai_tp LIKE N'N%'";
    if($nuoc_get_data=="")
    {
        $totalRows = mysqli_num_rows(mysqli_query($mysqli,$sql1));
    }
    else
    {
        $totalRows = mysqli_num_rows(mysqli_query($mysqli,$sql));
    }
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