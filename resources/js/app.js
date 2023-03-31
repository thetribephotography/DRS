import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// import TomSelect from 'tom-select';

window.TomSelect = require("tom-select");

//Startgoing on scroll
// const target = document.getElementById("target");
// const number = document.getElementById("number");
// const options = {
//   threshold: 0.5,
// };

// const observer = new IntersectionObserver((entries) => {
//   entries.forEach((entry) => {
//     if (entry.isIntersecting) {
//       let count = 0;
//       const interval = setInterval(() => {
//         number.textContent = count++;
//         if (count > 400) {
//           clearInterval(interval);
//         }
//       }, 1);
//     }
//   });
// }, options);
// observer.observe(target);

// console.log("hI");
