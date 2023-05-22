{
    // document là đại diện cho trang web, muốn lấy gì ở web thì phải qua document
    const classThem = document.querySelectorAll('.js-them')
    console.log(classThem)
    const classModal = document.querySelector('.class_modal-popup')
    console.log(classModal)
    const classClose = document.querySelectorAll('.class_table-button_huy')
    const classThemPupUp = document.querySelectorAll('.class_table-button_them')
    function showAdd() {
        classModal.classList.add('class_modal-popup-open')
    }
    classThem[0].addEventListener('click',showAdd)

    // bắt sự kiện nút ở trong popup
    function close() {
        classModal.classList.remove('class_modal-popup-open')
    }
    classClose[0].addEventListener('click',close)

    function themPupUp(e) {
        classModal.classList.remove('class_modal-popup-open')
    }

    classThemPupUp[0].addEventListener('click',themPupUp)
}