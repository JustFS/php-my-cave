const root = document.getElementById('root');
const loginButton = document.getElementById('login');
const logo = document.getElementById('logo');


const display = el => {
  fetch(`libraries/views/${el}.php`)
  .then(res => res.text())
  .then(res => root.innerHTML = res)
}

loginButton.addEventListener('click', () => display('admin'));
logo.addEventListener('click', () => display('lobby'));