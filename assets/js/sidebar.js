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


