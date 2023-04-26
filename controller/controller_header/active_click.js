const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const menu = $$('.menu-li');

menu.forEach((menu,index) => {
    menu.onclick = function(){
        // Tim kiem xem co thang nao dang co class the nay ko xong xoa di
        $('.menu-li.active').classList.remove('active');
        this.classList.add('active');
    }
});


    