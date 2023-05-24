// document là đại diện cho trang web, muốn lấy gì ở web thì phải qua document
const snhvThem = document.querySelectorAll('.js-them')
const snhvModal = document.querySelector('.snhv__modal--popup')
const snhvClose = document.querySelectorAll('.snhv__table--button_huy')
const snhvThemPupUp = document.querySelectorAll('.snhv__table--button_them')
function showAdd() {
    snhvModal.classList.add('snhv__modal--popup--open')
}
snhvThem[0].addEventListener('click',showAdd)

// bắt sự kiện nút ở trong popup
function close() {
    snhvModal.classList.remove('snhv__modal--popup--open')
}
snhvClose[0].addEventListener('click',close)

function themPupUp(e) {
    snhvModal.classList.remove('snhv__modal--popup--open')
}

snhvThemPupUp[0].addEventListener('click',themPupUp)