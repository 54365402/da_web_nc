<!-- Kết nối CSDL -->
<?php
    include_once "../controller/connection.php";
    // include_once "class_sort.php";
    
    $class_get_data="";
    if(isset($_POST['class_input-search']))
        {
            $class_get_data = $_POST['class_input-search'];
        }
    else
        {
            $class_get_data = "";
        }
    // search sql
    $class_search = "WHERE id_class LIKE '%$class_get_data%' ";


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
    $sql = "SELECT * FROM (tbl_class Inner Join tbl_nhan_vien On tbl_class.id_nv = tbl_nhan_vien.id_nv) $class_search ORDER BY id_class LIMIT $perRow, $rowsPerPage";
    $query = mysqli_query($mysqli,$sql);

    // Tổng số sản phẩm
    $sql1 = "SELECT * FROM tbl_class";
    if($class_get_data=="")
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
        if($page==$i)
            {
                $listPages .= '<input class="active class-page" type="submit" value="'.$i.'" name="page">';
            }
        else
            {
                $listPages .= '<input class="class-page" type="submit" value="'.$i.'" name="page">';
            }
    }   
?>

