{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const hang = $$(".tdd__table_td--hienthi-td-update");
    const tieuDe = $(".tdd__table_row--tieuDe_update");
    const buttonupdate = $(".js-sua");
    function showupdate(){
        for(var i = 0 ; i<hang.length;i++)
        {
            hang[i].style.display="table-cell";
        }
        tieuDe.style.display="table-cell";
        
    }
    buttonupdate.addEventListener("click",showupdate);
}