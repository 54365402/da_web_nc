<!-- ket noi csdl -->
<?php
    include_once "../controller/controller_nhan_vien/NhanVienPage.php";
?>
<!--hien thi ds nv  -->
<link rel="stylesheet" href="./assets/css/lich_di_lam.css">

<body>
    <div class="main-lichlam">
        <div class="ds-nhanvien">
            <div class="nhanvien__search-input">
                <i class="fa-sharp fa-solid fa-magnifying-glass nhanvien__search-input--icon"></i>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <input class='nhanvien__input-search' type="text" name="nhanvien__input-search"
                        placeholder="Tìm Kiếm">
                </form>
            </div>
            <div class="nhanvien__table">
                <table class="nhanvien__table--view">
                    <tr class="nhanvien__table-view--title">
                        <th>TYPE</th>
                        <th>ID NV</th>
                        <th>NAME</th>
                    </tr>
                    <?php
                    //duyet qua cac phan tu trong mang
                while ($row = mysqli_fetch_array($query)) 
                {
                ?>
                    <tr class="nhanvien__table-view--data">
                        <td><?php echo $row["chuc_vu"]?></td>
                        <td><?php echo $row["id_nv"]?></td>
                        <td><?php echo $row["name"]?></td>
                        <?php
                }
                ?>
                </table>
            </div>
            <form class="btn__select" action="NhanVienOption.php" method="post">
                <select class="btn__select--type">
                    <option value="All" style="text-align:center; font-weight:bold;">All</option>
                    <option value="Gym" style="text-align:center; font-weight:bold;">Gym</option>
                    <option value="Yoga" style="text-align:center; font-weight:bold;">Yoga</option>
                    <option value="Aerobic" style="text-align:center; font-weight:bold;">Aerobic</option>
                    <option value="Boxing" style="text-align:center; font-weight:bold;">Boxing</option>
                    <option value="Swimming" style="text-align:center; font-weight:bold;">Swimming</option>
                </select>
            </form>
        </div>
        <div class="table__lichlam">
            <table class="table__lichlam--view">
                <thead>
                    <tr>
                        <th></th>
                        <th>Thứ hai</th>
                        <th>Thứ ba</th>
                        <th>Thứ tư</th>
                        <th>Thứ năm</th>
                        <th>Thứ sáu</th>
                        <th>Thứ bảy</th>
                        <th>Chủ Nhật</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>6h</th>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                    </tr>
                    <tr>
                        <th>8h</th>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                    </tr>
                    <tr>
                        <th>10h</th>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                    </tr>
                    <tr>
                        <th>12h</th>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                    </tr>
                    <tr>
                        <th>14h</th>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                    </tr>
                    <tr>
                        <th>16h</th>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                    </tr>
                    <tr>
                        <th>18h</th>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                    </tr>
                    <tr>
                        <th>20h</th>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                        <td><i class="fa-solid fa-user-plus add__lichhoc js-add"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>