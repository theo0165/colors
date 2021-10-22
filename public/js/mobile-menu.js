window.addEventListener('DOMContentLoaded', function () {
  document.querySelector('.hamburger').addEventListener('click', function () {
    document.body.classList.toggle('mobile-menu-open');
  });

  document
    .querySelector('.mobile-menu .right .menu .close')
    .addEventListener('click', function () {
      document.body.classList.toggle('mobile-menu-open');
    });
});
