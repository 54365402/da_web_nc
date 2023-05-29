{
    const $$ = document.querySelectorAll.bind(document);
    var index = 0;
    nextSlider();
    function nextSlider(){
        var i;
        var ktc_sliders = $$(".ktc__div--slider");
        // sẽ cho thằng trước ẩn đi để hiện thằng sau
        for (i=0; i<ktc_sliders.length;i++)
        {
            ktc_sliders[i].style.display = "none";
        }
        //  hiện thằng sau
        index++;
        if(index>ktc_sliders.length){
            index =1;
        }
        ktc_sliders[index-1].style.display = "block";
        // đệ quy lặp lại
        setTimeout(nextSlider, 3000);
    }
        }   