<!-- Kết nối CSDL -->
<?php
    include_once "../controller/connection.php";
    
    $snhv_get_data="";
    if(isset($_POST['snhv__input--search']))
    {
        $snhv_get_data = $_POST['snhv__input--search'];
    }
    else
    {
        $snhv_get_data = "";
    }
    // search sql
    $snhv_search = " WHERE tbl_sinh_nhat_hoi_vien.id_hv LIKE '%$snhv_get_data%' and ngay_sinh=CURDATE()";

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
    $sql = "SELECT * FROM tbl_sinh_nhat_hoi_vien $snhv_search ORDER BY id_hv LIMIT $perRow, $rowsPerPage";
    $query = mysqli_query($mysqli,$sql);
    
    // Tổng số sản phẩm
    $sql1 = "SELECT * FROM tbl_sinh_nhat_hoi_vien";
    if($snhv_get_data=="")
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
            $listPages .= '<input class="active snhv--page" type="submit" value="'.$i.'" name="page">';
        }
        else{
            $listPages .= '<input class="snhv--page" type="submit" value="'.$i.'" name="page">';
        }
    }
?>

