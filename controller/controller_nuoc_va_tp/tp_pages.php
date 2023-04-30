<!-- Kết nối CSDL -->
<?php
    include "../controller/connection.php";

    // if(isset($_GET['tp_orderBy']))
    // {

    //     echo $_POST['tp_orderBy'];
    // }
    // else
    // {
    //     echo 3;
    // }
   
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
    $sql = "SELECT * FROM tbl_nuoc_va_thuc_pham WHERE loai_tp LIKE N'T%' 
    ORDER BY id_nuoc_va_tp DESC LIMIT $perRow, $rowsPerPage";
    $query = mysqli_query($mysqli,$sql);
    // Tổng số sản phẩm
    $sql1 = "SELECT * FROM tbl_nuoc_va_thuc_pham WHERE loai_tp LIKE N'T%'";
    $totalRows = mysqli_num_rows(mysqli_query($mysqli,$sql1));
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