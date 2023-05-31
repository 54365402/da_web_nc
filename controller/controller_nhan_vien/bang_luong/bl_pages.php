<!-- Kết nối CSDL -->
<?php
    include_once "../../../controller/connection.php";
    include_once "bl_sort.php";
    
    $bl_get_data="";
    if(isset($_POST['bl__input--search']))
    {
        $bl_get_data = $_POST['bl__input--search'];
    }
    else
    {
        $bl_get_data = "";
    }
    // search sql
    $bl_search = " WHERE luong.id_nv LIKE '%$bl_get_data%'";

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
    $sql = "SELECT * FROM (luong INNER JOIN tbl_nhan_vien ON luong.id_nv=tbl_nhan_vien.id_nv) $bl_search ORDER BY $bl_key $bl_Tang LIMIT $perRow, $rowsPerPage";
    $query = mysqli_query($mysqli,$sql);
    
    // Tổng số sản phẩm
    $sql1 = "SELECT * FROM luong";
    if($bl_get_data=="")
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
            $listPages .= '<input class="active bl--page" type="submit" value="'.$i.'" name="page">';
        }
        else{
            $listPages .= '<input class="bl--page" type="submit" value="'.$i.'" name="page">';
        }
    }
?>

