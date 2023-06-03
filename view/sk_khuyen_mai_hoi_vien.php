<?php
    include_once "header.php";
?>
<link rel="stylesheet" href="./assets/css/skkm.css">
<nav class="sk__menu">
    <ul class="sk__menu-header">
        <li><a href="#">Sự kiện khuyến mãi</a></li>
        <li><a href="#">Sinh nhật hội viên</a></li>
        <li><a href="#">Tích điểm</a></li>
    </ul>
</nav>
<script>
const links = document.querySelectorAll(".sk__menu-header li a");
for (let i = 0; i < links.length; i++) {
    links[i].addEventListener("click", function() {
        for (let j = 0; j < links.length; j++) {
            if (i !== j) {
                links[j].classList.add("small");
                links[j].classList.remove("large");
            }
        }
        links[i].classList.add("large");
        links[i].classList.remove("small");
    });
}
</script>
<?php
    include_once "../controller/controller_su_kien/su_kien_khuyen_mai/skkm_hien_thi.php"
?>