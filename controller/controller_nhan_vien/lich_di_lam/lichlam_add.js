
const lichlam_Them = document.querySelectorAll('.js-add');
const lichlam_Modal = document.querySelector('.lichlam__modal-popup');
const lichlam_Close = document.querySelectorAll('.lichlam__table-btn-huy');
const lichlam_ThemPopUp = document.querySelectorAll('.lichlam__table-btn-them');

function showAdd() {
  lichlam_Modal.classList.add('lichlam__modal-popup-open');
}

// Duyệt qua các phần tử và gán hàm xử lý cho sự kiện click cho từng phần tử
lichlam_Them.forEach((btn) => {
  btn.addEventListener('click', showAdd);
});

function close() {
  lichlam_Modal.classList.remove('lichlam__modal-popup-open');
}

lichlam_Close.forEach((btn) => {
  btn.addEventListener('click', close);
});

function themPopUp(e) {
  lichlam_Modal.classList.remove('lichlam__modal-popup-open');
}

lichlam_ThemPopUp.forEach((btn) => {
  btn.addEventListener('click', themPopUp);
});