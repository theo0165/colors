let cookieBox = document.querySelector('.cookie-consent');
let cookieButton = document.querySelector('#cookie-accept');

console.log(cookieBox);

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
  let expires = 'expires=' + d.toUTCString();
  document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';
}

function getCookie(cname) {
  let name = cname + '=';
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return '';
}

cookieButton.addEventListener('click', () => {
  cookieBox.classList.add('accepted');

  setCookie('cookieAccepted', true, 365);
});

let darkThemeSwitcher = document.querySelector('.theme-switcher .dark-button');
let lightThemeSwitcher = document.querySelector(
  '.theme-switcher .light-button'
);

darkThemeSwitcher.addEventListener('click', function () {
  console.log('Dark click');
  if (!document.body.classList.contains('dark-theme')) {
    document.body.classList.add('dark-theme');
    document.body.classList.remove('light-theme');
  }

  setCookie('theme', 'dark', 365);
});

lightThemeSwitcher.addEventListener('click', function () {
  console.log('Light click');
  if (!document.body.classList.contains('light-theme')) {
    document.body.classList.add('light-theme');
    document.body.classList.remove('dark-theme');
  }

  setCookie('theme', 'light', 365);
});
