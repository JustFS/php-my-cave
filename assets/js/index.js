const root = document.getElementById("root");
const toggle = document.getElementById("toggle");
const create = document.querySelectorAll(".create");
const update = document.querySelectorAll(".update");
const admin = document.getElementById("admin");
const wineList = document.getElementById("wine-list");
let data = [];

// dark screen when navbar is deployed
if (toggle) {
  toggle.addEventListener("change", () => {
    if (toggle.checked) {
      root.style = "filter: brightness(30%)";
    } else {
      root.style = "filter: brightness(100%)";
    }
  });
}

// dynamic nav
const display = (el) => {
  fetch(`libraries/views/${el}.html.php`)
    .then(res => res.text())
    .then(res => (root.innerHTML = res));
};

if (admin) {
  admin.onclick = () => display("admin");
  create.forEach((el) => {
    el.onclick = () => display("create");
  });
  update.forEach((el) => {
    el.onclick = () => display("update");
  });
}

// get data from mySql
// const list = new XMLHttpRequest();
// list.onreadystatechange = function () {
//   if (this.readyState == 4 && this.status == 200) {
//     data = JSON.parse(this.responseText);
//     listDisplay();
//   }
// };
// list.open("GET", "libraries/controllers/getData.php", true);
// list.send();

// const listDisplay = () => {
//   wineList.innerHTML = data
//     .map(
//       (wine) =>
//         `
//         <div class="wine-card">
//           <h2>${wine.name}</h2>
//           <div class="container">
//             <div class="text-container">
//               <div class="buttons">
//                 <h4>${wine.year}</h4>
//                 <h4>${wine.country}</h4>
//                 <h4>${wine.region}</h4>
//               </div>
//               <p>${wine.description}</p>
//             </div>
//             <img src="assets/uploads/${wine.picture}" alt="photo-bouteille">
//           </div>
//         </div>
//       `
//     )
//     .join("");
// };
