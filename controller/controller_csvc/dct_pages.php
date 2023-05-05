<!-- Kết nối CSDL -->
<?php
    include_once "../controller/connection.php";
    include_once "dct_sort.php";
    
    $dct_get_data="";
    if(isset($_POST['dct__input--search']))
    {
        $dct_get_data = $_POST['dct__input--search'];
    }
    else
    {
        $dct_get_data = "";
    }
    // search sql
    $dct_search = "WHERE id_may LIKE '%$dct_get_data%' ";

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
    $sql = "SELECT * FROM tbl_dung_cu_tap $dct_search ORDER BY $dct_key $dct_Tang LIMIT $perRow, $rowsPerPage";
    $query = mysqli_query($mysqli,$sql);
    // Tổng số sản phẩm
    $sql1 = "SELECT * FROM tbl_dung_cu_tap";
    $totalRows = mysqli_num_rows(mysqli_query($mysqli,$sql1));
    // Tính tổng số trang pages
    $totalPages = ceil($totalRows/$rowsPerPage);
    // Xây dựng thanh phân trang
    $listPages = "";
    for ($i=1; $i<=$totalPages; $i++)
    {
        if($page==$i){
            $listPages .= '<input class="active dct--page" type="submit" value="'.$i.'" name="page">';
        }
        else{
            $listPages .= '<input class="dct--page" type="submit" value="'.$i.'" name="page">';
        }
    }
    
?>

