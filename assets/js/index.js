const root = document.getElementById('root');
const toggle = document.getElementById('toggle');

// dark screen when navbar is deployed
if (toggle){
  toggle.addEventListener('change', () => {
    if (toggle.checked){
      root.style = 'filter: brightness(30%)';
    } else {
      root.style = 'filter: brightness(100%)';
    }
  })
}


const display = el => {
  fetch(`libraries/views/${el}.php`)
  .then(res => res.text())
  .then(res => root.innerHTML = res)
}

