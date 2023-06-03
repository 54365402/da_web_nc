<!-- Kết nối CSDL -->
<?php
    include_once "../../../controller/connection.php";
    include_once "tdd_sort.php";
    
    $tdd_get_data="";
    if(isset($_POST['tdd__input--search']))
    {
        $tdd_get_data = $_POST['tdd__input--search'];
    }
    else
    {
        $tdd_get_data = "";
    }
    // search sql
    $tdd_search = "WHERE id_wardrobe LIKE '%$tdd_get_data%' ";

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
    $sql = "SELECT * FROM (wardrobe INNER JOIN tbl_hoi_vien ON wardrobe.id_hv = tbl_hoi_vien.id_hv) $tdd_search ORDER BY $tdd_key $tdd_Tang LIMIT $perRow, $rowsPerPage";
    $query = mysqli_query($mysqli,$sql);
    // Tổng số sản phẩm
    $sql1 = "SELECT * FROM wardrobe";
    if($tdd_get_data=="")
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
            $listPages .= '<input class="active tdd--page" type="submit" value="'.$i.'" name="page">';
        }
        else{
            $listPages .= '<input style="cursor:pointer; class="tdd--page" type="submit" value="'.$i.'" name="page">';
        }
    }
    
?>

