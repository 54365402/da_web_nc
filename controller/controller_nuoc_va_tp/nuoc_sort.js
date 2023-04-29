{
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
const nuoc_sort = $("#nuoc__select");
const xhttp = new XMLHttpRequest();

xhttp.onreadystatechange = function(){
    if(this.readyState==4 && this.status==200){
        console.log("Dữ liệu đã được gửi thành công!");
    }
};
const url = "../controller/controller_nuoc_va_tp/nuoc_hien_thi.php";
const method = "POST";


nuoc_sort.onchange=function(e){
    if(e.target.value==0){     
        var nuoc_orderBy = "nuoc_orderBy="+"id_nuoc_va_tp";
    }
    if(e.target.value==1){     
        var nuoc_orderBy = "nuoc_orderBy=name";
    }
    if(e.target.value==2){     
        var nuoc_orderBy = "nuoc_orderBy=gia_ban";
    }
    xhttp.open(method, url, true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    console.log(nuoc_orderBy)
    xhttp.send(nuoc_orderBy);
    
}
}