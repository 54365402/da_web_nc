const theSelect = document.getElementById('the_select');

// Thêm sự kiện "change" cho select box
theSelect.addEventListener('change', () => {
  const option = theSelect.value; // Lấy giá trị của option được chọn

  if (option === 'ten_az') {
    // Sắp xếp tên từ A->Z
    sortByNameAsc();
  } else if (option === 'ten_za') {
    // Sắp xếp tên từ Z->A
    sortByNameDesc();
  } else if (option === 'tien_tang') {
    // Sắp xếp tiền tăng dần
    sortByMoneyAsc();
  } else if (option === 'tien_giam') {
    // Sắp xếp tiền giảm dần
    sortByMoneyDesc();
  }
});

function sortByNameAsc() {
  // Lấy danh sách các thành viên và sắp xếp theo tên từ A->Z
  const table = document.getElementById('tbl_hoi_vien');
  const rows = table.querySelectorAll('tbody tr');
  const sortedRows = [...rows].sort((a, b) => {
    const name_hvA = a.querySelector('.name_hv').textContent.trim().toUpperCase();
    const name_hvB = b.querySelector('.name_hv').textContent.trim().toUpperCase();
    if (name_hvA < name_hvB) {
      return -1;
    } else if (name_hvA > name_hvB) {
      return 1;
    } else {
      return 0;
    }
  });
  // Hiển thị lại các thành viên đã sắp xếp
  const tbody = table.querySelector('tbody');
  tbody.innerHTML = '';
  sortedRows.forEach(row => tbody.appendChild(row));
}

function sortByNameDesc() {
  // Lấy danh sách các thành viên và sắp xếp theo tên từ Z->A
  const table = document.getElementById('tbl_hoi_vien');
  const rows = table.querySelectorAll('tbody tr');
  const sortedRows = [...rows].sort((a, b) => {
    const name_hvA = a.querySelector('.name_hv').textContent.trim().toUpperCase();
    const name_hvB = b.querySelector('.name_hv').textContent.trim().toUpperCase();
    if (name_hvA > name_hvB) {
      return -1;
    } else if (name_hvA < name_hvB) {
      return 1;
    } else {
      return 0;
    }
  });
  // Hiển thị lại các thành viên đã sắp xếp
  const tbody = table.querySelector('tbody');
  tbody.innerHTML = '';
  sortedRows.forEach(row => tbody.appendChild(row));
}

function sortByMoneyAsc() {
  // Lấy danh sách các thẻ và sắp xếp theo tiền tăng dần
  const table = document.getElementById('card');
  const rows = table.querySelectorAll('tbody tr');
  const sortedRows = [...rows].sort((a, b) => {
    const total_moneyA = parseInt(a.querySelector('.total_money').textContent.trim().replace(/,/g, ''));
    const total_moneyB = parseInt(b.querySelector('.total_money').textContent.trim().replace(/,/g, ''));
    return total_moneyA - total_moneyB;
  });
  // Hiển thị
  function sortByNameReverse() {
    const table = document.getElementById('tbl_hoi_vien');
    const rows = table.querySelectorAll('tbody tr');
    const sortedRows = [...rows].sort((a, b) => {
      const name_hvA = a.querySelector('.name_hv').textContent.trim().toUpperCase();
      const name_hvB = b.querySelector('.name_hv').textContent.trim().toUpperCase();
      if (name_hvA > name_hvB) {
        return -1;
      } else if (name_hvA < name_hvB) {
        return 1;
      } else {
        return 0;
      }
    });
    const tbody = table.querySelector('tbody');
    tbody.innerHTML = '';
    sortedRows.forEach(row => tbody.appendChild(row));
  }
  function sortByMoneyReverse() {
    const table = document.getElementById('card');
    const rows = table.querySelectorAll('tbody tr');
    const sortedRows = [...rows].sort((a, b) => {
      const total_moneyA = parseInt(a.querySelector('.total_money').textContent.trim().replace(/,/g, ''));
      const total_moneyB = parseInt(b.querySelector('.total_money').textContent.trim().replace(/,/g, ''));
      return total_moneyB - total_moneyA;
    });
    const tbody = table.querySelector('tbody');
    tbody.innerHTML = '';
    sortedRows.forEach(row => tbody.appendChild(row));
  }
}    