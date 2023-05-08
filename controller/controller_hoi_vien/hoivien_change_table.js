var tableState = 1; // Bắt đầu với bảng đầu tiên
  document.getElementById('hoivien__search-btn').addEventListener('click', function() {
    if(tableState == 1) {
      document.getElementById('hoivien__table-view').style.display = 'none';
      document.getElementById('hoivien__table-health-view').style.display = 'table';
      tableState = 2;
    } else {
      document.getElementById('hoivien__table-health-view').style.display = 'none';
      document.getElementById('hoivien__table-view').style.display = 'table';
      tableState = 1;
    }
});

const hoivien_search_btn = document.querySelector('.hoivien__search-btn');
hoivien_search_btn.addEventListener('click', function() {
   hoivien_search_btn.classList.toggle('active');
});
