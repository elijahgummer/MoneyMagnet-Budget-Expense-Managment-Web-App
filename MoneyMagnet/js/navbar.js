document.addEventListener("DOMContentLoaded", function() {
  const menuBtn = document.querySelector('.menu-btn');
  const cancelBtn = document.querySelector('.cancel-btn');
  const menuList = document.querySelector('.menu-list');
  const body = document.querySelector('body');

  menuBtn.onclick = function() {
      menuList.classList.add('show');
      menuBtn.classList.add('hide');
      body.classList.add('disabled');
  }

  cancelBtn.onclick = function() {
      menuList.classList.remove('show');
      menuBtn.classList.remove('hide');
      body.classList.remove('disabled');
  }
});
