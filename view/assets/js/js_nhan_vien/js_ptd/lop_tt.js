{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    var inputGoiTap = $(".lop_table-add_input22");
    var inputThanhTien = $(".lop_table-add_input222");
        
    function getValue(){
        console.log(inputGoiTap.value);
        thanhtien = Number(inputGoiTap.value);
            
        inputThanhTien.value = thanhtien;
    }

}
