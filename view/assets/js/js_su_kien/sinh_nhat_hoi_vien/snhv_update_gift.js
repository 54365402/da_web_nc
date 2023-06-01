{
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
    var buttonSuaGift = $$(".button_sua_gift");
    for(const value of buttonSuaGift){
        value.onclick = function(e){
            const allowUpdateGift = $$(".snhv__div__input--gift");
            alert("Mời bạn tiến hành chỉnh sửa!");
            for(var i=0; i<allowUpdateGift.length;i++)
            {
                allowUpdateGift[i].removeAttribute("disabled");
            };
            value.onkeyup=function(e){
                console.log(e.which)
                if(e.which===27)
                {
                    const buttonSuaGiftName = $(".snhv__div__input--gift--name"+e.target.value);
                    const buttonSuaGiftDiem = $(".snhv__div__input--gift--diem"+e.target.value);
                    const buttonSuaGiftSoLuong = $(".snhv__div__input--gift--so_luong"+e.target.value);
                    var base_name_gift = buttonSuaGiftName.value;
                    var base_diem_gift = buttonSuaGiftDiem.value;
                    var base_so_luong_gift = buttonSuaGiftSoLuong.value;
                    var base_id_gift = e.target.value;
                    
                    var id_gift = "id_gift="+base_id_gift;
                    var name_gift = "name="+base_name_gift;
                    var diem_gift = "diem="+base_diem_gift;
                    var so_luong_gift = "so_luong="+base_so_luong_gift;

                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function(){
                        if(this.readyState==4 && this.status == 200){
                            console.log("Dữ liệu được gửi thành công!");
                        }
                    };
                
                    var method = "POST";
                    var url = "../../controller/controller_su_kien/sinh_nhat_hoi_vien/snhv_update.php";
                     
                    if(confirm("Bạn có chắc muốn sửa ID "+base_id_gift+" không?"))
                    {
                
                        xhttp.open(method, url, true);
                        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                        xhttp.send(id_gift+"&"+name_gift+"&"+diem_gift+"&"+so_luong_gift);
                        location.reload(true);
                
                    }
                    else{
                        for(var i=0; i<allowUpdateGift.length;i++)
                        {
                            allowUpdateGift[i].setAttribute("disabled");
                        };
                    }
                }


        }
        }
    } 
}