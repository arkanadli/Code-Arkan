const password = document.getElementById('password');
const toggle = document.getElementById('toggle');

function showHide0() {
  if (password.type === 'password') {
    password.setAttribute('type', 'text');
    toggle.classList.add('hide');
  } else {
    password.setAttribute('type', 'password');
    toggle.classList.remove('hide');
  }
}
// hide0
const pass = document.getElementById('pass');
const togg = document.getElementById('togg');

function showHide1() {
  if (pass.type === 'password') {
    pass.setAttribute('type', 'text');
    togg.classList.add('hide');
  } else {
    pass.setAttribute('type', 'password');
    togg.classList.remove('hide');
  }
}
// hide1
