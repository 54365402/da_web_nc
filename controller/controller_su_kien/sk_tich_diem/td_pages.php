<!-- Kết nối CSDL -->
<?php
    include_once "../../../controller/connection.php";
    include_once "td_sort.php";

    $td_get_data="";
    if(isset($_POST['td__input--search']))
    {
        $td_get_data = $_POST['td__input--search'];
    }
    else
    {
        $td_get_data = "";
    }
    // search sql
    $td_search = " WHERE tbl_tich_diem.id_hv LIKE '%$td_get_data%' and ngay_sinh=$td_get_date";

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
    $sql = "SELECT * FROM tbl_tich_diem $td_search ORDER BY id_hv LIMIT $perRow, $rowsPerPage";
    $query = mysqli_query($mysqli,$sql);
    
    // Tổng số sản phẩm
    $sql1 = "SELECT * FROM tbl_tich_diem";
    if($td_get_data=="")
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
            $listPages .= '<input class="active td--page" type="submit" value="'.$i.'" name="page">';
        }
        else{
            $listPages .= '<input style="cursor:pointer; class="td--page" type="submit" value="'.$i.'" name="page">';
        }
    }
?>

