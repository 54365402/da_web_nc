{
    const $ = document.querySelector.bind(document);
    let cong1 = $(".ktc_goi_tap_i1--goi_tap--menu");
    let cong2 = $(".ktc_goi_tap_i2--goi_tap--menu");
    let cong3 = $(".ktc_goi_tap_i3--goi_tap--menu");
    let change1 =$(".ktc_goi_tap__div--goi_tap__i1");
    let change2 =$(".ktc_goi_tap__div--goi_tap__i2");
    let change3 =$(".ktc_goi_tap__div--goi_tap__i3");
    let content1 = $(".ktc_goi_tap__div--goi_tap--content__js1");
    let content2 = $(".ktc_goi_tap__div--goi_tap--content__js2");
    let content3 = $(".ktc_goi_tap__div--goi_tap--content__js3");
    
    cong1.onclick = function(e){                      
        // change1.innerHTML = '<i style="color:white; margin-top: 13px;"  class="fa-solid fa-minus"></i>';
        // change2.innerHTML = '<i style="color:white; margin-top: 13px;"  class="fa-solid fa-plus ktc_goi_tap_i2--goi_tap--menu"></i>';
        // change3.innerHTML = '<i style="color:white; margin-top: 13px;"  class="fa-solid fa-plus ktc_goi_tap_i3--goi_tap--menu"></i>';
        content1.style.display = "block";
        content2.style.display = "none";
        content3.style.display = "none";
    }

    cong2.onclick = function(e){   
        // change1.innerHTML = '<i style="color:white; margin-top: 13px;"  class="fa-solid fa-plus ktc_goi_tap_i1--goi_tap--menu"></i>';
        // change2.innerHTML = '<i style="color:white; margin-top: 13px;"  class="fa-solid fa-minus"></i>';
        // change3.innerHTML = '<i style="color:white; margin-top: 13px;"  class="fa-solid fa-plus ktc_goi_tap_i3--goi_tap--menu"></i>';
        content1.style.display = "none";
        content2.style.display = "block";
        content3.style.display = "none";
    }

    cong3.onclick = function(e){          
        // change3.innerHTML = '<i style="color:white; margin-top: 13px;"  class="fa-solid fa-minus"></i>';
        content1.style.display = "none";
        content2.style.display = "none";
        content3.style.display = "block";
    }
}