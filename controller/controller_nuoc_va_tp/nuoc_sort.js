{
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
var nuoc_sort = $("#nuoc__select");
var xhttp = new XMLHttpRequest();


var url = "../controller/controller_nuoc_va_tp/nuoc_pages.php";
var method = "GET";


nuoc_sort.onchange=function(e){
    var nuoc_orderBy = "nuoc_orderBy=";
    if (e.target.value == 0) {
        nuoc_orderBy += "id_nuoc_va_tp";
    } else if (e.target.value == 1) {
        nuoc_orderBy += "name";
    } else if (e.target.value == 2) {
    nuoc_orderBy += "gia_ban";
}
    console.log(nuoc_orderBy);
    xhttp.open(method, url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(nuoc_orderBy);
    location.reload(true);
}
}