<!-- Kết nối CSDL -->
<?php
    include_once "../controller/connection.php";

    include_once "tp_sort.php";
   
    $tp_get_data="";
    if(isset($_POST['tp__input--search']))
    {
        $tp_get_data = $_POST['tp__input--search'];
    }
    else
    {
        $tp_get_data = "";
    }
    // search sql
    $tp_search = " id_nuoc_va_tp LIKE '%$tp_get_data%' ";

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
    // Sẽ lấy giá trị từ hàng nào
    $perRow = $page * $rowsPerPage - $rowsPerPage;
    $sql = "SELECT * FROM tbl_nuoc_va_thuc_pham WHERE loai_tp LIKE N'T%' and $tp_search
    ORDER BY $tp_key $tp_Tang LIMIT $perRow, $rowsPerPage";
    $query = mysqli_query($mysqli,$sql);
    // Tổng số sản phẩm
    $sql1 = "SELECT * FROM tbl_nuoc_va_thuc_pham WHERE loai_tp LIKE N'T%'";
    if($tp_get_data=="")
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
            $listPages .= '<input class="active tp--page" type="submit" value="'.$i.'" name="page">';
        }
        else{
            $listPages .= '<input class="tp--page" type="submit" value="'.$i.'" name="page">';
        }
    }
    
?>