function sidebar(sidebar_block,content_block){
  var sidebar = document.querySelector(sidebar_block);
  var menuPosition = document.getElementById('menu').offsetHeight;
  
  window.addEventListener('scroll', () => {
    var contentRect = document.querySelector(content_block).getBoundingClientRect();
    var sidebarRect = sidebar.getBoundingClientRect();
    sidebar.style.height = screen.height -menuPosition + 'px';
    
    if (sidebarRect.height < contentRect.height) {
      if (sidebarRect.top < 0) {
        sidebar.style.top = menuPosition + 'px';
      } else {
        sidebar.style.top = menuPosition + 'px';
      }
    }
  });
}
sidebar('#check-list','#school-list-child');
sidebar('#news','#school-list-child');

var links = document.querySelectorAll('#pagination a');

for (var i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function(e) {
        e.preventDefault();
        var page = this.getAttribute('href').split('=')[1];
        loadPage(page);
    });
}

function loadPage(page) {
    // Xử lý AJAX để tải nội dung mới cho trang hiện tại
    // Hoặc tải lại trang hoàn toàn
}


